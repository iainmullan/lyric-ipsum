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
			color: #999;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			text-align:center;
			font-size: 32px;
			margin: 16px 0 0 0;
			font-weight: 700;
		}

		#lyrics {
			text-align:left;
			font-weight: 400;
			font-size: 18px;
			width: 600px;
			margin: 0 auto;
		}

	</style>
</head>
<body>

	<header>
		<h1>Lyric Ipsum</h1>
	</header>

	@yield('content')

</body>
</html>
