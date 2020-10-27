<!DOCTYPE html>
<html>
<head>
	<title>TokoKite</title>
</head>
<link rel="stylesheet" type="text/css" href="css/login.css">
<body>
	<div class="box">
		<div class="judul">
			<h2> Selamat Datang di TokoKite </h2>
			<hr>
		</div>
		<div class="menu">
			<div class="login">
				<h2> L<u>o</u>gin </h2>
			</div>		
		</div>
		<div class="input">
			<div class="username">
				<input type="text" name="" placeholder="Username/Email">
			</div>
			<div class="password">
				<input type="password" name="" placeholder="Password">
			</div>
			<div>
				<label><a href="">Forget Password ?</a></label>
			</div>
				<button><a href="{{ url('/home') }}">Login</a></button>

				<div>
				<label><a href="{{ url('/register') }}">Sudah Punya Akun ?</a></label>
			</div>
		</div>
	</div>
</body>
</html>