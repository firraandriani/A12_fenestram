<!DOCTYPE html>
<html>
<head>
    <!-- Meta Including Start -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">   
    <title>Login | Fenestram</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/FinalProject/public/css/Awal MAsuk.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/FinalProject/public/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <script src="js/awalMasuk.js"></script> -->
</head>
<body>

	<!-- Logo Start -->
	<div class="logo">
		<img src="http://localhost/FinalProject/public/img/Logo.png">
	</div>
	<!-- End of Logo -->

	<!-- Login Box Start -->
	<div class="box">
		<h2>Login</h2>
		<form action="<?= BASEURL; ?>/Login/loginPermission" method="post">
			<div class="inputBox">
				<input type="text" name="email" required></input>
				<label>Email</label>
				<span class="input user"></span>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required></input>
				<label>Password</label>
				<span class="input pass"></span>
			</div>
			<h5><a href="<?= BASEURL ?>/register">Belum punya akun?</a></h5>
			<div>
				<input type="checkbox" name="remember" id="remember">
				<label class="remember" for="remember">Remember me</label>
			</div>
			<button type="submit" name="login" id="tombol_login">Login</button>
		</form>
	</div>
	<!-- End of Login Box -->

</body>
</html>