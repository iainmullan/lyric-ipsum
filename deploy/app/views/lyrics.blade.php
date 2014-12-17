@extends('layout')

@section('content')

	<form action="/get">
		<input name="artist" placeholder="Enter artist name..." />
		<input type="submit" />
	</form>

	<div id="lyrics">
		@foreach($paras as $p)
			<p>
				{{ implode('. ', $p) }}
			</p>
		@endforeach
	</div>

	<div class="playlist spotify active" data-source="spotify">

		<?php
		$trackset = implode(',', $spotifyIds);
		?>
		<iframe style="float:right;" src="https://embed.spotify.com/?uri=spotify:trackset:<?php echo $trackset; ?>" frameborder="0" allowtransparency="true" width="300px" height="600px"></iframe>
	</div>

@endsection

