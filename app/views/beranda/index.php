<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<title>Selamat Datang di Fenstram...</title>
	<link href="<?= BASEURL ?>/css/beranda.css" rel="stylesheet" type="text/css">
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
                                    <li class="dropdown-link" style="">
                                        <a href="#" style="color: #A9A9A9"><?= $data['tanggal_lahir'] ?? '' ?></a>
                                    </li>
                                    <li class="dropdown-link" style="background-color: #FFFFFF; font-family: open sans; font-size: 0.8em;">
                                        <img src="<?= BASEURL ?>/img/images (2).png" width="25" height="25" style="margin-left: 10px; margin-top: 10px"><span><a href="<?= BASEURL ?>/profil" style="color: #000; margin-left: 10px;">Pengaturan Akun</a></span>
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
	<div class="main">

        <div class="event">
            <div id="slider">
                <figure>
                    <img src="<?= BASEURL ?>/img/even.png" alt="">
                    <img src="<?= BASEURL ?>/img/even2.png" alt="">
                    <img src="<?= BASEURL ?>/img/even3.png" alt="">
                </figure>
            </div>
        </div>

        <div class="recfy">

            <div class="header">
                <p style="padding-bottom: 17px;">Rekomendasi untuk Anda</p>
            </div>

            <div class="buku">
                <div class="minichard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/bintang.jpg" alt="">
                    </div>
    
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Bintang</p>
                        <p class="penulis">Tere Liye</p>
                    </div>
                </div>
    
                <div class="minichard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/Bulan.jpg" alt="">
                    </div>
    
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Bintang</p>
                        <p class="penulis">Tere Liye</p>
                    </div>
                </div>
    
                <div class="minichard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/3. Matahari.jpg" alt="">
                    </div>
    
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Matahari</p>
                        <p class="penulis">Tere Liye</p>
                    </div>
                </div>
    
                <div class="minichard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/4. Rumah Kaca.jpg" alt="">
                    </div>
    
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Rumah Kaca</p>
                        <p class="penulis">Pramoedya</p>
                    </div>
                </div>
    
                <div class="minichard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/5. Selena.jpg" alt="">
                    </div>
    
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Selena</p>
                        <p class="penulis">Tere Liye</p>
                    </div>
                </div>
    
                <div class="minichard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/6. Bumi.jpg" alt="">
                    </div>
    
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Bumi</p>
                        <p class="penulis">Tere Liye</p>
                    </div>
                </div>
            </div>
        </div>

		<div class="rekomendasi" style="padding-bottom: 50px">
            <div class="byAge">
    
                <div class="header">
                    <p style="font-size: 1.3em">Berdasarkan usia ></p>
                    <select class="pilihUsia" nama="pilihUsia" id = "pilihUsia" style="font-size: 1.3em">
                        <option value="a">Remaja</option>
                        <option value="b">Anak (6-12)</option>
                        <option value="c">Anak (1-5)</option>
                        <option value="d">Dewasa >19</option>
                    </select>
                </div>
    
                <div class="chard">
                    <div class="cover">
                        <a href="<?= BASEURL ?>/book"><img src="<?= BASEURL ?>/img/dear nathan.jpg" alt=""></a>
                    </div>
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <a href="<?= BASEURL ?>/book" style="color: #000"><p class="judul">Dear Nathan</p></a>
                        <p class="penulis">Erisca Febriani</p>
                    </div>
                </div>
    
                <div class="chard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/1. Kau, Aku.jpg" alt="">
                    </div>
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Kau, Aku, dan, Sepucuk Angpau Merah</p>
                        <p class="penulis">Tere Liye</p>
                    </div>
                </div>
    
                <div class="chard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/3. Matahari.jpg" alt="">
                    </div>
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Matahari</p>
                        <p class="penulis">Tere Liye</p>
                    </div>
                </div>
                
            </div>
    
            <div class="byKategori">
    
                <div class="header">
                    <p style="font-size: 1.3em">Berdasarkan Jenis Buku ></p>
                    <select class="pilihUsia" nama="pilihUsia" id = "pilihUsia" style="font-size: 1.3em">
                        <option value="a">Novel</option>
                        <option value="b">Komik</option>
                        <option value="c">Sekolah</option>
                        <option value="d">Jurnal</option>
                    </select>
                </div>
    
                <div class="chard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/Bulan.jpg" alt="">
                    </div>
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Bulan</p>
                        <p class="penulis">Tere Liye</p>
                    </div>
                </div>
    
                <div class="chard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/6. Bumi.jpg" alt="">
                    </div>
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Bumi</p>
                        <p class="penulis">Tere Liye</p>
                    </div>
                </div>
    
                <div class="chard">
                    <div class="cover">
                        <img src="<?= BASEURL ?>/img/bintang.jpg" alt="">
                    </div>
                    <div class="tulisan">
                        <p class="kategori">Novel</p>
                        <p class="judul">Bintang</p>
                        <p class="penulis">Tere Liye</p>
                    </div>
                </div>
                
            </div>
        </div>
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
	<script type="text/javascript">
	    var counter = 1;
	    setInterval(function(){
	    	document.getElementById('radio' + counter).checked = true;
	    	counter++;
	    	if(counter > 3){
	    		counter = 1;
	    	}
	    }, 3000);
	</script>
</body>
</html>
