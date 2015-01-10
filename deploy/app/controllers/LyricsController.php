<?php

use Iainmullan\Musixmatch\Musixmatch;

class LyricsController extends BaseController {

	function get() {

		$artist = Input::get('artist', 'The White Stripes');

		$musix = new Musixmatch(Config::get('lyrics.musixmatch.api_key'));

    	$result = $musix->method('track.search', array('q_artist' => $artist));

    	$tracks = $result['track_list'];

    	// choose 5 songs at random
		shuffle($tracks);
    	$tracks = array_slice($tracks, 0, 5);

    	$allLines = [];

    	$spotifyIds = [];
        foreach ($tracks as $track) {
         	
         	$trackId = $track['track']['track_id'];
         	$spotifyIds[] = $track['track']['track_spotify_id'];

	    	$t = $musix->method('track.lyrics.get', array('track_id' => $trackId));

	    	$body = $t['lyrics']['lyrics_body'];

	    	$lines = explode("\n", $body);

	    	$lines = preg_grep('/\*/', $lines, PREG_GREP_INVERT);
	    	$lines = preg_grep('/^[\W]*$/', $lines, PREG_GREP_INVERT);

	    	$lines = array_filter($lines);

	    	$allLines = array_merge($allLines, $lines);
        }

        shuffle($allLines);
		$paras = array_chunk($allLines, 15);
		$paras = array_slice($paras, 0, 5);

		return View::make('lyrics', array(
			'artist' => $artist,
			'paras' => $paras,
			'spotifyIds' => $spotifyIds
		));

	}


}
