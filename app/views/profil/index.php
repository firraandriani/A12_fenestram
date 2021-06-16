<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Profile</title>
	<link href="<?= BASEURL ?>/css/My Profile.css" rel="stylesheet" type="text/css">
</head>
<body class="background">
	<?php

	if (isset($_SESSION['messages'])) {
		echo "<script type='text/javascript'>alert('" . $_SESSION['messages'] ."');</script>";
		unset($_SESSION['messages']);
	}

	?>
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
	    	<h1 class="petunjuk">Petunjuk Pengisian Profil Anggota</h1>
	    	<ul class="penjelasan"> 
				<li>Pastikan data yang anda masukkan sesuai dengan kartu identitas yang berlaku, benar, dan dapat dipertanggungjawabkan.</li>
				<li>Inputan dengan tanda * wajib diisi.</li>
				<li>Klik tombol <a href="beranda.html">save</a>, jika anda sudah selesai mengubah profil Anda.</li>
			</ul>
			<hr class="garis">
			<br>
	    </div>
		<form action="<?= BASEURL ?>/Profil/profilIsi" method="post">
			<div class="form">
				<b class="judul">DATA DIRI</b>
				<div class="inputfield">
					<input name="id" type="hidden" value="<?= $data['id'] ?? '' ?>">
				</div>
				<div class="inputfield">
					<label class="dataDiri">NIS/NIM/NIP</label>
					<input class="diri" id="nis" name="nomor_identitas" type="text" placeholder="Masukkan NIS/NIM/NIP" value="<?= $data['nomor_identitas'] ?? '' ?>">
				</div> 
				<div class="inputfield">
					<label class="dataDiri">Nama Panggilan</label>
					<input class="diri" name="nama_panggilan" type="text" placeholder="Masukkan Nama Panggilan Anda" value="<?= $data['nama_panggilan'] ?? '' ?>">
				</div>  
				<div class="inputfield">
					<label class="dataDiri">Kota Lahir *</label>
					<div style="width: 100%;">
						<select class="select" name="id_kota" id="tempatLahir">
							<option value="" <?= (isset($data['id_kota']) && $data['id_kota'] == '') ? 'selected' : '' ?>>-Pilih Kota-</option>
							<option value="1" <?= (isset($data['id_kota']) && $data['id_kota'] == 1) ? 'selected' : '' ?>>Kediri</option>
							<option value="2" <?= (isset($data['id_kota']) && $data['id_kota'] == 2) ? 'selected' : '' ?>>Jember</option>
							<option value="3" <?= (isset($data['id_kota']) && $data['id_kota'] == 3) ? 'selected' : '' ?>>Blitar</option>
							<option value="4" <?= (isset($data['id_kota']) && $data['id_kota'] == 4) ? 'selected' : '' ?>>Tulungagung</option>
							<option value="5" <?= (isset($data['id_kota']) && $data['id_kota'] == 5) ? 'selected' : '' ?>>Jakarta</option>
							<option value="6" <?= (isset($data['id_kota']) && $data['id_kota'] == 6) ? 'selected' : '' ?>>Trenggalek</option>
							<option value="7" <?= (isset($data['id_kota']) && $data['id_kota'] == 7) ? 'selected' : '' ?>>Jombang</option>
							<option value="8" <?= (isset($data['id_kota']) && $data['id_kota'] == 8) ? 'selected' : '' ?>>Pasuruan</option>
							<option value="9" <?= (isset($data['id_kota']) && $data['id_kota'] == 9) ? 'selected' : '' ?>>Banyuwangi</option>
							<option value="9" <?= (isset($data['id_kota']) && $data['id_kota'] == 10) ? 'selected' : '' ?>>Surabaya</option>
						</select>
					</div>
				</div> 
				<div class="inputfield">
					<label class="dataDiri">Tanggal Lahir *</label>
					<div style="width: 100%;">
						<input class="tanggal" id="tanggal" type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?? '' ?>">
					</div>
				</div> 
				<div class="inputfield">
					<label class="dataDiri">Nomor HP</label>
					<input class="diri" name="nomor_hp" type="number" placeholder="Masukkan Tanpa Tanda Pemisah" value="<?= $data['nomor_hp'] ?? '' ?>">
				</div> 
				<div class="inputfield">
					<label class="dataDiri">Hobi</label>
					<div style="width: 100%;">
						<input class="radio" type="checkbox" name="id_hobi[]" value="1" <?= (isset($data['id_hobi']) && in_array(1, $data['id_hobi'])) ? 'checked' : '' ?>> 
						<span class="pilihan">Membaca</span>
						<input class="radio2" type="checkbox" name="id_hobi[]" value="2" <?= (isset($data['id_hobi']) && in_array(2, $data['id_hobi'])) ? 'checked' : '' ?>>
						<span class="pilihan">Menulis</span><br>
						<input class="radio" type="checkbox" name="id_hobi[]" value="3" <?= (isset($data['id_hobi']) && in_array(3, $data['id_hobi'])) ? 'checked' : '' ?>>
						<span class="pilihan">Menyanyi</span>
						<input class="radio3" type="checkbox" name="id_hobi[]" value="4" <?= (isset($data['id_hobi']) && in_array(4, $data['id_hobi'])) ? 'checked' : '' ?>>
						<span class="pilihan">Menari</span><br>
						<input class="radio" type="checkbox" name="id_hobi[]" value="5" <?= (isset($data['id_hobi']) && in_array(5, $data['id_hobi'])) ? 'checked' : '' ?>>
						<span class="pilihan">Menonton Film</span><br>
					</div>
				</div> 
				<div class="inputfield">
					<label class="dataDiri">Jenis Kelamin *</label>
					<div style="width: 100%;">
						<input class="radio" name="id_jenis_kelamin" id="male" value="1" type="radio" <?= (isset($data['id_jenis_kelamin']) && $data['id_jenis_kelamin'] == 1) ? 'checked' : '' ?>/><span class="pilihan">Laki-laki</span><br>
						<input class="radio" name="id_jenis_kelamin" id="female" value="2" type="radio" <?= (isset($data['id_jenis_kelamin']) && $data['id_jenis_kelamin'] == 2) ? 'checked' : '' ?>/><span class="pilihan">Perempuan</span><br>
					</div>
				</div> 
				<div class="inputfield">
					<label class="dataDiri">Jenis Anggota *</label>
					<div style="width: 100%;">
						<select class="select" name="id_jenis_anggota" id ="jenisAnggota">
							<option value="" <?= (isset($data['id_jenis_anggota']) && $data['id_jenis_anggota'] == '') ? 'selected' : ''  ?>>-Pilih Jenis Anggota-</option>
							<option value="1" <?= (isset($data['id_jenis_anggota']) && $data['id_jenis_anggota'] == 1)  ? 'selected' : '' ?>>Pelajar</option>
							<option value="2" <?= (isset($data['id_jenis_anggota']) && $data['id_jenis_anggota'] == 2)  ? 'selected' : '' ?>>Mahasiswa</option>
							<option value="3" <?= (isset($data['id_jenis_anggota']) && $data['id_jenis_anggota'] == 3)  ? 'selected' : '' ?>>Umum</option>
							<option value="4" <?= (isset($data['id_jenis_anggota']) && $data['id_jenis_anggota'] == 4)  ? 'selected' : '' ?>>Peneliti</option>
							<option value="5" <?= (isset($data['id_jenis_anggota']) && $data['id_jenis_anggota'] == 5)  ? 'selected' : '' ?>>Karyawan</option>
						</select>
					</div>
				</div>
				<div class="inputfield">
					<label class="dataDiri">Status Perkawinan</label>
					<div style="width: 100%;">
						<input class="radio" name="id_status_perkawinan" id="belum" value="1" type="radio" <?= (isset($data['id_status_perkawinan']) && $data['id_status_perkawinan'] == 1) ? 'checked' : '' ?>/><span class="pilihan">Belum Menikah</span><br>
						<input class="radio" name="id_status_perkawinan" id="sudah" value="2" type="radio" <?= (isset($data['id_status_perkawinan']) && $data['id_status_perkawinan'] == 2) ? 'checked' : '' ?>/><span class="pilihan">Menikah</span><br>
					</div>
				</div>
				<div class="inputfield">
					<label class="dataDiri">Pekerjaan *</label>
					<div style="width: 100%;">
						<select class="select" name="id_pekerjaan" id="kerja">
							<option value="" <?= (isset($data['id_pekerjaan']) && $data['id_pekerjaan'] == '') ? 'selected' : '' ?>>-Pilih Pekerjaan-</option>
							<option value="1" <?= (isset($data['id_pekerjaan']) && $data['id_pekerjaan'] == 1) ? 'selected' : '' ?>>Mahasiswa</option>
							<option value="2" <?= (isset($data['id_pekerjaan']) && $data['id_pekerjaan'] == 2) ? 'selected' : '' ?>>Pelajar</option>
							<option value="3" <?= (isset($data['id_pekerjaan']) && $data['id_pekerjaan'] == 3) ? 'selected' : '' ?>>Pegawai Swasta</option>
							<option value="4" <?= (isset($data['id_pekerjaan']) && $data['id_pekerjaan'] == 4) ? 'selected' : '' ?>>Pegawai Negeri</option>
							<option value="5" <?= (isset($data['id_pekerjaan']) && $data['id_pekerjaan'] == 5) ? 'selected' : '' ?>>Wiraswasta</option>
							<option value="6" <?= (isset($data['id_pekerjaan']) && $data['id_pekerjaan'] == 6) ? 'selected' : '' ?>>Guru</option>
							<option value="7" <?= (isset($data['id_pekerjaan']) && $data['id_pekerjaan'] == 7) ? 'selected' : '' ?>>Dosen</option>
							<option value="8" <?= (isset($data['id_pekerjaan']) && $data['id_pekerjaan'] == 8) ? 'selected' : '' ?>>Peneliti</option>
						</select>
					</div>
				</div>
				<div class="inputfield">
					<label class="dataDiri">Alamat Tinggal *</label>
					<textarea name="alamat_tinggal" id="alamatTinggal" placeholder="Masukkan Alamat Anda sesuai Identitas" class="textarea"><?= isset($data['alamat_tinggal']) ? $data['alamat_tinggal'] : '' ?></textarea>
				</div>
				<div class="inputfield">
					<label class="dataDiri"> </label>
					<div style="width: 100%;">
						<select class="select" id="kotaTinggal" name="id_kota_tinggal">
							<option value="" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == '') ? 'selected' : '' ?>>-Pilih Kota-</option>
							<option value="1" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == 1) ? 'selected' : '' ?>>Kediri</option>
							<option value="2" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == 2) ? 'selected' : '' ?>>Jember</option>
							<option value="3" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == 3) ? 'selected' : '' ?>>Blitar</option>
							<option value="4" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == 4) ? 'selected' : '' ?>>Tulungagung</option>
							<option value="5" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == 5) ? 'selected' : '' ?>>Jakarta</option>
							<option value="6" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == 6) ? 'selected' : '' ?>>Trenggalek</option>
							<option value="7" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == 7) ? 'selected' : '' ?>>Jombang</option>
							<option value="8" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == 8) ? 'selected' : '' ?>>Pasuruan</option>
							<option value="9" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == 9) ? 'selected' : '' ?>>Banyuwangi</option>
							<option value="10" <?= (isset($data['id_kota_tinggal']) && $data['id_kota_tinggal'] == 10) ? 'selected' : '' ?>>Surabaya</option>
						</select>
						<select class="select2" id="provinsi" name="id_provinsi_tinggal">
							<option value="" <?= (isset($data['id_provinsi_tinggal']) && $data['id_provinsi_tinggal'] == '') ? 'selected' : '' ?>>-Pilih Provinsi-</option>
							<option value="1" <?= (isset($data['id_provinsi_tinggal']) && $data['id_provinsi_tinggal'] == 1) ? 'selected' : '' ?>>Jawa Timur</option>
							<option value="2" <?= (isset($data['id_provinsi_tinggal']) && $data['id_provinsi_tinggal'] == 2) ? 'selected' : '' ?>>Jawa Tengah</option>
							<option value="3" <?= (isset($data['id_provinsi_tinggal']) && $data['id_provinsi_tinggal'] == 3) ? 'selected' : '' ?>>Jawa Barat</option>
							<option value="4" <?= (isset($data['id_provinsi_tinggal']) && $data['id_provinsi_tinggal'] == 4) ? 'selected' : '' ?>>DKI Jakarta</option>
							<option value="5" <?= (isset($data['id_provinsi_tinggal']) && $data['id_provinsi_tinggal'] == 5) ? 'selected' : '' ?>>Daerah Istimewa Yogyakarta</option>
							<option value="6" <?= (isset($data['id_provinsi_tinggal']) && $data['id_provinsi_tinggal'] == 6) ? 'selected' : '' ?>>Banten</option>
							<option value="7" <?= (isset($data['id_provinsi_tinggal']) && $data['id_provinsi_tinggal'] == 7) ? 'selected' : '' ?>>Sumatra Utara</option>
							<option value="8" <?= (isset($data['id_provinsi_tinggal']) && $data['id_provinsi_tinggal'] == 8) ? 'selected' : '' ?>>Sumatra Barat</option>
							<option value="9" <?= (isset($data['id_provinsi_tinggal']) && $data['id_provinsi_tinggal'] == 9) ? 'selected' : '' ?>>Riau</option>
						</select>
					</div>
				</div>
				<hr class="garis">
				<br>
				<b class="judul">DATA PENDIDIKAN</b>
				<div class="inputfield">
					<label class="dataDiri">Nama Institusi</label>
					<input class="diri" name="nama_institusi" id="namaInstitusi" type="text" placeholder="Masukkan Nama Sekolah/Universitas/Kantor" value="<?= isset($data['nama_institusi']) ? $data['nama_institusi'] : '' ?>">
				</div>
				<div class="inputfield">
					<label class="dataDiri">Alamat Institusi</label>
					<textarea name="alamat_institusi" placeholder="Masukkan Alamat Institusi" class="textarea"><?= isset($data['alamat_institusi']) ? $data['alamat_institusi'] : '' ?></textarea>
				</div>
				<div class="inputfield">
					<label class="dataDiri"> </label>
					<div style="width: 100%;">
						<select class="select" name="id_kota_institusi" id = "alamatInstitusi">
							<option value="" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == '') ? 'selected' : '' ?>>-Pilih Kota-</option>
							<option value="1" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == 1) ? 'selected' : '' ?>>Kediri</option>
							<option value="2" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == 2) ? 'selected' : '' ?>>Jember</option>
							<option value="3" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == 3) ? 'selected' : '' ?>>Blitar</option>
							<option value="4" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == 4) ? 'selected' : '' ?>>Tulungagung</option>
							<option value="5" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == 5) ? 'selected' : '' ?>>Jakarta</option>
							<option value="6" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == 6) ? 'selected' : '' ?>>Trenggalek</option>
							<option value="7" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == 7) ? 'selected' : '' ?>>Jombang</option>
							<option value="8" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == 8) ? 'selected' : '' ?>>Pasuruan</option>
							<option value="9" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == 9) ? 'selected' : '' ?>>Banyuwangi</option>
							<option value="10" <?= (isset($data['id_kota_institusi']) && $data['id_kota_institusi'] == 10) ? 'selected' : '' ?>>Surabaya</option>
						</select>
						<select class="select2" name="id_provinsi_institusi" id = "alamatInstitusi">
							<option value="" <?= (isset($data['id_provinsi_institusi']) && $data['id_provinsi_institusi'] == '') ? 'selected' : '' ?>>-Pilih Provinsi-</option>
							<option value="1" <?= (isset($data['id_provinsi_institusi']) && $data['id_provinsi_institusi'] == 1) ? 'selected' : '' ?>>Jawa Timur</option>
							<option value="2" <?= (isset($data['id_provinsi_institusi']) && $data['id_provinsi_institusi'] == 2) ? 'selected' : '' ?>>Jawa Tengah</option>
							<option value="3" <?= (isset($data['id_provinsi_institusi']) && $data['id_provinsi_institusi'] == 3) ? 'selected' : '' ?>>Jawa Barat</option>
							<option value="4" <?= (isset($data['id_provinsi_institusi']) && $data['id_provinsi_institusi'] == 4) ? 'selected' : '' ?>>DKI Jakarta</option>
							<option value="5" <?= (isset($data['id_provinsi_institusi']) && $data['id_provinsi_institusi'] == 5) ? 'selected' : '' ?>>Daerah Istimewa Yogyakarta</option>
							<option value="6" <?= (isset($data['id_provinsi_institusi']) && $data['id_provinsi_institusi'] == 6) ? 'selected' : '' ?>>Banten</option>
							<option value="7" <?= (isset($data['id_provinsi_institusi']) && $data['id_provinsi_institusi'] == 7) ? 'selected' : '' ?>>Sumatra Utara</option>
							<option value="8" <?= (isset($data['id_provinsi_institusi']) && $data['id_provinsi_institusi'] == 8) ? 'selected' : '' ?>>Sumatra Barat</option>
							<option value="9" <?= (isset($data['id_provinsi_institusi']) && $data['id_provinsi_institusi'] == 9) ? 'selected' : '' ?>>Riau</option>
						</select>
					</div>
				</div>
				<div class="inputfield">
					<label class="dataDiri">Kelas/Semester</label>
					<input class="diri" id="kelas" name="kelas" type="text" placeholder="Masukkan Kelas/Semester" value="<?= isset($data['kelas']) ? $data['kelas'] : '' ?>">
				</div>
				<div class="inputfield">
					<label class="dataDiri">Jurusan</label>
					<input class="diri" name="jurusan" type="text" placeholder="Masukkan Jurusan" value="<?= isset($data['jurusan']) ? $data['jurusan'] : '' ?>">
				</div>
				<div class="inputfield">
					<label class="dataDiri"> </label>
					<div style="width: 100%">
						<button type="submit" name="login" id="tombol_login" class="button">SAVE</button>
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