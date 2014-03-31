<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="alert">
		{{Session::get('alert')}}
	</div>
	
	{{link_to_route('login', 'Login', $attributes = array(), $secure = null);}}
	<a href="{{ URL::to('logout') }}">Logout</a>
	
	<div class="welcome">
		<img src="/assets/images/logo.png" alt="">
		<h3>Coming Soon</h3>
		
	</div>

	
</body>
</html>
