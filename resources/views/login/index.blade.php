<!DOCTYPE html>
<html>
<head>
<title>Welcome Back</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{ URL::asset('css/style.css') }} " rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Login</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post" action="/login">
          @csrf
					<input class="text" type="text" name="email" placeholder="Email" required="yes" autocomplete="off">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input type="submit" value="LOGIN" name="login">
				</form>
				<p>Tidak Punya Akun? <a href="/register"> Daftar Sekarang!</a></p>
			</div>
		</div>
	</div>
</body>
</html>