<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dear Nathan</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<link href="<?= BASEURL ?>/css/book.css" rel="stylesheet" type="text/css">
</head>
<body class="background">
	<header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
                <img src="<?= BASEURL ?>/img/logo.png" class="logo" width="180" height="50">
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
		<div class="grid-container">
			<div class="item1">
				<img src="<?= BASEURL ?>/img/dear nathan.jpg" width="95" height="140">
			</div>
			<div class="item2"><span class="penjelas">Judul</span></div>
			<div class="item3"><span class="penjelas2">Dear Nathan</span></div> 
			<div class="item4" style="width: 50px;"></div>
			<div class="item5"><span class="spanFavorit"></span></a></div> 
			<div class="item6"><span class="penjelas">Penulis</span></div>
			<div class="item7"><span class="penjelas2">Erisca Febriani</span></div>
			<div class="item8" style="width: 50px;"></div>
			<div class="item9"><span class="penjelas">Penerbit</span></div>
			<div class="item10"><span class="penjelas2">Best Media</span></div>
			<div class="item11" style="width: 50px;"></div>
			<div class="item12"><span class="penjelas">Tanggal Terbit</span></div>
			<div class="item13"><span class="penjelas2">Maret 2016</span></div>
			<div class="item14" style="width: 50px;"></div>
			<div class="item15"><span class="penjelas">Kategori Buku</span></div>  
			<div class="item16"><span class="penjelas2">Novel Remaja</span></div>
			<div class="item17" style="width: 50px;"></div>
			<div class="item18"><span class="penjelas">Bahasa</span></div>
			<div class="item19"><span class="penjelas2">Indonesia</span></div>
			<div class="item20" style="width: 50px;"></div>
		</div>
		<p class ="deskripsi" style="font-weight: bold; margin-top: 15px;">Deskripsi</p>
		<p class ="deskripsi" style="padding-top: 10px;">Berawal dari keterlambatan mengikuti upacara pertama di sekolah baru, Salma Alvira bertemu dengan seorang cowok yang membantunya menyelusup lewat gerbang samping. Selidik punya selidik, cowok itu ternyata bernama Nathan; murid nakal yang sering jadi bahan gosip anak satu sekolah.</p>
		<p class ="deskripsi" style="padding-top: 30px;">Beberapa rangkaian kejadian pun terjadi, yang justru mengantarkan Salma untuk menjadi kian lebih dekat dengan Nathan. Dua kepribadian yang saling bertolak belakang, seperti langit dan bumi; yang tidak bisa bersatu tapi saling melengkapi.</p>
		<p class ="deskripsi" style="padding-top: 30px;">Novel ini mengisahkan tentang masa indah putih abu-abu, persahabatan, pelajaran kehidupan, dan pentingnya untuk selalu menghargai perasaan.</p>
		<hr style="margin-top: 10px;">
	    <div class="boxBook">
	    	<div class="bab">
	    		<a href="<?= BASEURL ?>/shocked" class="linkBook"><span style="font-weight: bold;">First :</span><span> Shocked</span></a>
	        	<p class="terakhir">Terakhir dibaca 14 Juni 2021</p>
	        </div>
	    </div>
	    <div class="boxBook">
	    	<div class="bab">
	    		<a href="#" class="linkBook"><span style="font-weight: bold;">Second :</span><span> The Call</span>
	    		</a>
	        	<p class="terakhir">Terakhir dibaca 15 Juni 2021</p>
	        </div>
	    </div>
	    <div class="boxBook">
	    	<div class="bab">
	    		<a href="#" class="linkBook"><span style="font-weight: bold;">Third :</span><span> Fight</span>
	    		</a>
	        	<p class="terakhir">Terakhir dibaca 15 Juni 2021</p>
	        </div>
	    </div>
	    <div class="boxBook">
	    	<div class="bab">
	    		<a href="#" class="linkBook"><span style="font-weight: bold;">Fourth :</span><span> The Moment</span>
	    		</a>
	        	<p class="terakhir">Terakhir dibaca Hari ini 12.20</p>
	        </div>
	    </div>
	    <div class="boxBook">
	    	<div class="bab">
	    		<a href="#" class="linkBook"><span style="font-weight: bold;">Fifth :</span><span> Almost</span>
	    		</a>
	        	<p class="terakhir"></p>
	        </div>
	    </div>
	    <div class="boxBook">
	    	<div class="bab">
	    		<a href="#" class="linkBook"><span style="font-weight: bold;">Sixth :</span><span> Fallen</span>
	    		</a>
	        	<p class="terakhir"></p>
	        </div>
	    </div>
	    <div class="boxBook">
	    	<div class="bab">
	    		<a href="#" class="linkBook"><span style="font-weight: bold;">Seventh:</span><span> Confused</span>
	    		</a>
	        	<p class="terakhir"></p>
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
</body>
</html>