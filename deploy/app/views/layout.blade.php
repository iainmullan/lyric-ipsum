<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lyric Ipsum</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:400,700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			color: #444;
		}

		a, a:visited {
			color: inherit;
		}

		h1 {
			text-align:center;
			font-size: 32px;
			margin: 16px 0 0 0;
			font-weight: 700;
		}

		h1 a {
			text-decoration:none;
		}

		header, main, footer {
			max-width: 960px;
			margin: 0 auto;
			padding: 20px;
		}

		#search, footer {
			text-align: center;
		}
		footer {
			margin-top: 100px;
		}

		p.tagline {
			text-align:center;
			margin: 30px 0;
		}

		#search input {
			padding: 5px 10px;
			height: 40px;
			margin: 10px 0;
		}

		#search input[type=text] {
			font-size: 2em;
			border: 1px solid #999;
			width: 75%;
			min-width: 300px;
		}
		#search input[type=submit] {
			border: none;
			font-size: 1em;
			background: #eee;
		}

		#lyrics {
			text-align:left;
			font-weight: 400;
			font-size: 1.3em;
			max-width: 600px;
			margin: 0 auto;
		}

	</style>
</head>
<body>

	<header>
		<h1><a href="/">Lyric Ipsum</a></h1>
	</header>

	<main>
		@yield('content')
	</main>

	<footer>
		by <a href="http://iainmullan.com">Iain Mullan</a>
		at <a href="http://musichackday.org/" target="_blank">Music Hack Day</a> London 2014
		with the help of <a href="https://developer.musixmatch.com/" target="_blank">musixmatch</a>
	</footer>

</body>
</html>
