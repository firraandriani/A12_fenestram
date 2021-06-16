<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Profile</title>
	<link href="<?= BASEURL ?>/css/catatan.css" rel="stylesheet" type="text/css">
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
        <form action="<?= BASEURL; ?>/catatan/tambah" method="post">
            <table class="form">
                <tr>
                    <td><label for="judulBuku">Judul Buku</label></td>
                    <td><input type="text" name="judulBuku" class="judul"></td>
                </tr>
                <tr>
                    <td><label for="tanggalBaca">Tanggal Baca</label></td>
                    <td><input type="date" name="tanggalBaca" class="tanggal"></td>
                </tr>
            </table>
            <button type="submit">Tambahkan Catatan</button>
        </form>

        <table class="data_catatan">
            <tr>
                <th>Tanggal</th>
                <th>Judul Buku</th>
                <th>Jadwal Baca</th>
                <th>Action</th>
            </tr>
            <?php foreach($data['catatan'] as $ctt) : ?>
                <tr>
                    <td><?= $ctt['date'] ?></td>
                    <td><?= $ctt['judul_buku'] ?></td>
                    <td><?= $ctt['jadwal_baca'] ?></td>
                    <td><a class = 'edit' href = '<?= BASEURL;?>/catatan/edit/<?= $ctt['id_catatan']?>'><img src='<?= BASEURL ?>/img/edit.png' width='20' height='20'>Edit</a><a href="<?= BASEURL;?>/catatan/hapus/<?= $ctt['id_catatan']?>" class="hapus"><img src='<?= BASEURL ?>/img/hapus.png' width='20' height='20'>Hapus</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
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
	<script src="../js/profil.js"></script>
</body>
</html>