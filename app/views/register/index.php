<!DOCTYPE html>
<html>

<head>

	<!-- Meta Including Start -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- End of Meta Including -->

	<!-- Title Start -->
	<title>Register | Fenestram</title>
	<!-- End of Title -->

	<!-- CSS and JavaScript Including File -->
	<link rel="stylesheet" type="text/css" href="http://localhost/FinalProject/public/css/Awal MAsuk.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/FinalProject/public/css/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- End of Including File -->

</head>

<body>

	<!-- Logo -->
	<div class="logo">
        <img src="http://localhost/FinalProject/public/img/Logo.png">
	</div>
	<!-- End of Logo -->

	<!-- Box Register Start -->
	<div class="box">
		<h3>Create your own account</h3>
		<form action="<?= BASEURL ?>/Register/registerPermission" method="post">
			<div class="inputBox">
				<input type="text" name="nama" required></input>
				<label>Nama Lengkap</label>
				<span class="input nama"></span>
			</div>
			<div class="inputBox">
				<input type="text" name="email" required></input>
				<label>Email</label>
				<span class="input nim"></span>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required></input>
				<label>Password</label>
				<span class="input pass"></span>
			</div>
			<div class="inputBox">
				<input type="password" name="password2" required></input>
				<label>Re-Password</label>
				<span class="input pass"></span>
			</div>
			<button type="submit" name="login" id="tombol_login">Create Account!</button>
		</form>
	</div>
	<!-- End of Box Register -->
</body>

</html>
