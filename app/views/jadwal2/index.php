<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Fenestram</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/Jadwal.css">
</head>
<body>
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
    <div class="nav2">
        <ul>
            <li><a href="<?= BASEURL ?>/jadwal" class="Senin">Sen</a></li>
            <li><a href="<?= BASEURL ?>/jadwal2" class="Selasa">Sel</a></li>
            <li><a href="" class="Rabu">Rab</a></li>
            <li><a href="" class="Kamis">Kam</a></li>
            <li><a href="" class="Jumat">Jum</a></li>
            <li><a href="" class="Sabtu">Sab</a></li>
            <li><a href="" class="Minggu">Min</a></li>
        </ul>
    </div>

    <div class="main">
        <div class="card">
            <img src="<?= BASEURL ?>/img/bintang.jpg" alt="Sampul">
            <p >Bintang</p>
        </div>
        <div class="card">
        <img src="<?= BASEURL ?>/img/The Unforgettable.png" alt="Sampul">
            <p>The Unforgettable</p>
        </div>
        <div class="card">
            <img src="<?= BASEURL ?>/img/3. Matahari.jpg" alt="Sampul">
            <p>Matahari</p>
        </div>
        <div class="card">
            <img src="<?= BASEURL ?>/img/4. Rumah Kaca.jpg" alt="Sampul">
            <p>Rumah Kaca</p>
        </div>
        <div class="card">
            <img src="<?= BASEURL ?>/img/5. Selena.jpg" alt="Sampul">
            <p>Selena</p>
        </div>
        <div class="card">
            <img src="<?= BASEURL ?>/img/6. Bumi.jpg" alt="Sampul">
            <p>Bumi</p>
        </div>
        <div class="card">
            <img src="<?= BASEURL ?>/img/1. Kau, Aku.jpg" alt="Sampul">
            <p>Kau, Aku, dan, Sepucuk Angpau Merah</p>
        </div>
        <div class="card">
            <img src="<?= BASEURL ?>/img/Bulan.jpg" alt="Sampul">
            <p>Bulan</p>
        </div>
        <div class="card">
            <img src="<?= BASEURL ?>/img/Remember me Margareth.png" alt="Sampul">
            <p>Remember Me Margareth</p>
        </div>
        <div class="card">
            <img src="<?= BASEURL ?>/img/Biuntang Ilove you.png" alt="Sampul">
            <p>Bintang, I Love You</p>
        </div>
        <div class="card">
            <img src="<?= BASEURL ?>/img/Sourire.png" alt="Sampul">
            <p>Sourire</p>
        </div>
    </div>
    <br>
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