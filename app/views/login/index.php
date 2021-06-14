<!DOCTYPE html>
<html>
<head>
    <title>Fenestram</title>
    <link rel="stylesheet" href="http://localhost/FinalProject/public/css/Awal MAsuk.css">
    <script src="js/awalMasuk.js"></script>
</head>
<body>

    <div id="img"><img src="http://localhost/FinalProject/public/img/Logo.png" alt="Fenestram" ></div>

    <div class="content">

        <div class="h1">
            <p id="h1">Sign Up</p>
            <hr size="3px" color="#0000000"><br>
        </div>

        <div id="input">

            <input type="email" id="email" placeholder="Email">
            <hr size="3px" color="#0000000"><br>
            <input type="password" id="pass1" placeholder="Password">
            <hr size="3px" color="#0000000"><br>
            <input type="password" id="pass2" placeholder="Konfirmasi Password">
            <hr size="3px" color="#0000000"><br>

        </div>

        <div id="check">

            <input type="checkbox" id="SK">
            <label for="SK" id="Label">
                <a href="#"><b>Syarat</b></a>
                dan 
                <a href="#"><b>Ketentuan Layanan</b></a>
            </label>

        </div>

        <div id="button">

            <a href="html/form login.html"><button id="Login">Masuk</button></a>
            <Button onclick="validateForm()" id="Register">Mendaftar</Button></a>

        </div>

    </div>
    
</body>
</html>