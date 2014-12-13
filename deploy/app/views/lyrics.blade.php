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

@endsection

