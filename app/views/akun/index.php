<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Profile</title>
	<link href="<?= BASEURL ?>/css/My Profile.css" rel="stylesheet" type="text/css">
</head>
<body class="background">
	<header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
                <img src="<?= BASEURL ?>/img/Logo.png" class="logo" width="180" height="50">
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                    <li class="nav-link" style="--i: .6s">
                            <a href="<?= BASEURL ?>/beranda"><b>Beranda</b></a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="<?= BASEURL ?>/jadwal"><b>Jadwal</b></a>
                        </li>
						<li class="nav-link" style="--i: .85s">
                            <a href="<?= BASEURL ?>/catatan"><b>Catatan</b></a>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <span><input class="cari" type="search" name="cari" placeholder="Cari..."></span><span><a href="jelajah.html"><img src="<?= BASEURL ?>/img/Search Icon.png" alt="search" width="10" height="10" class="searchImg"></a></span>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="#"><img src="<?= BASEURL ?>/img/Profil.png" width="40" height="40"><i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                    	<a href="#" style="color: #A9A9A9;"><?= $data['nama'] ?? '' ?></a>
                                    </li>
									<li class="dropdown-link" style="background-color: #FFFFFF; font-family: open sans; font-size: 0.8em;">
                                        <img src="<?= BASEURL ?>/img/images (2).png" width="25" height="25" style="margin-left: 10px; margin-top: 10px"><span><a href="<?= BASEURL ?>/akun" style="color: #000; margin-left: 10px;">Pengaturan Akun</a></span>
                                    </li>
									<li class="dropdown-link" style="background-color: #FFFFFF; font-family: open sans; font-size: 0.8em;">
                                        <img src="<?= BASEURL ?>/img/Profil.png" width="25" height="25" style="margin-left: 10px; margin-top: 10px"><span><a href="<?= BASEURL ?>/profil" style="color: #000; margin-left: 10px;">Pengaturan Profil</a></span>
                                    </li>
                                    <li class="dropdown-link" style="background-color: #FFFFFF; font-family: open sans; font-size: 0.8em;">
                                        <img src="<?= BASEURL ?>/img/25706.png" width="25" height="25" style="margin-left: 10px; margin-top: 10px"><span><a href="<?= BASEURL ?>/logout" style="color: #000; margin-left: 10px;">Keluarkan Akun</a></span>
                                    </li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
	<div class="kotak">
	    <div>
	    	<h1 class="petunjuk">Petunjuk Pengisian Ganti Akun</h1>
	    	<ul class="penjelasan">
				<li>Klik tombol <a href="beranda.html">save</a>, jika anda sudah selesai mengubah akun Anda.</li>
			</ul>
			<hr class="garis">
			<br>
	    </div>
		<form action="<?= BASEURL ?>/Akun/update" method="post">
			<div class="form">
				<b class="judul">DATA AKUN</b>
				<div class="inputfield">
                    <label class="dataDiri">Nama Lengkap *</label>
					<input class="diri" id="namaLengkap" name="nama" type="text" placeholder="Masukkan Nama Lengkap Anda" value="<?= $data['nama'] ?? '' ?>">
				</div>
				<div class="inputfield">
                    <label class="dataDiri">Alamat Email *</label>
					<input class="diri" id="email" name="email" type="email" placeholder="Masukkan Email Baru Anda" value="<?= $data['email'] ?? '' ?>">
				</div>
				<div class="inputfield">
					<label class="dataDiri">Password *</label>
					<input class="diri"type="password" name="password" placeholder="Masukkan Password Baru Anda" required >
				</div>
				<div class="inputfield">
                    <label class="dataDiri">Re-Password *</label>
					<input class="diri"type="password" name="password2" placeholder="Masukkan Re-Password Baru Anda" required>
				</div>
				<div class="inputfield">
					<label class="dataDiri"> </label>
					<div style="width: 100%">
						<button type="submit" name="akun" id="tombol_akun" class="button">SAVE</button>
						<input type="reset" class="button2" value="RESET">
					</div>
				</div>
			</div>
		</form>
	</div>
	<footer>
		<div class="semua">
			<div class="left box">
				<h2>Alamat :</h2>
				<div class="isi">
					<p>Kampus Tegalboto, Jl. Kalimantan No.37,</p>
					<p>Krajan Timur, Sumbersari,</p>
					<p>Kec. Sumbersari, Kabupaten Jember,</p>
					<p>Jawa Timur, 68121</p>
					<p>Telp.(0331) 330224</p>
				</div>
			</div>
			<div class="center box">
				<h2>Dikerjakan Oleh:</h2>
				<div class="isi">
					<p>Firra <span style="word-spacing: 49px;">Andriani (192410101028)</span></p>
					<p>Anung Firdauzy Putra (192410101122)</p>
				</div>
			</div>
			<div class="right box">
				<h2>Didukung Oleh:</h2>
				<div class="isi">
					<p><img src="<?= BASEURL ?>/img/logounej.png" width="110" height="110" class="imgfoot"></p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>