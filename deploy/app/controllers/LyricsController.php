<?php

class LyricsController extends BaseController {

	function get() {

		$artist = Input::get('artist', 'Oasis');

		require app_path().'/library/musixmatch/src/musixmatch.php';

		$musix = new MusicXMatch(Config::get('lyrics.musixmatch.api_key'));
    	$result = $musix->method('track.search')->param_q_artist($artist)->execute_request();

    	$tracks = $result['track_list'];

    	// choose 5 songs at random
		shuffle($tracks);
    	$tracks = array_slice($tracks, 0, 5);

    	$allLines = [];

    	$spotifyIds = [];
        foreach ($tracks as $track) {
         	
         	$trackId = $track['track']['track_id'];
         	$spotifyIds[] = $track['track']['track_spotify_id'];

	    	$t = $musix->method('track.lyrics.get')->param('track_id', $trackId)->execute_request();

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
			'paras' => $paras,
			'spotifyIds' => $spotifyIds
		));

	}


}
