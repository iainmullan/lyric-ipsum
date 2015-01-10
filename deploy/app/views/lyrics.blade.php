@extends('layout')

@section('content')

	@include('elements.search', array('value' => $artist))

	<div id="lyrics">
		@foreach($paras as $p)
			<p>
				{{ implode('. ', $p) }}
			</p>
		@endforeach
	</div>

	<div id="playlist" class="playlist spotify active" data-source="spotify">
		<?php
		$trackset = implode(',', $spotifyIds);
		?>
		<iframe src="https://embed.spotify.com/?uri=spotify:trackset:<?php echo $trackset; ?>" frameborder="0" allowtransparency="true" width="100%" height="500px"></iframe>
	</div>

@endsection

