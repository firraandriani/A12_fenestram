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
					<label class="dataDiri">NIS/NIM/NIP *</label>
					<input class="diri" id="nis" name="nomor_identitas" type="text" placeholder="Masukkan NIS/NIM/NIP" value="<?= $data['nomor_identitas'] ?? '' ?>">
				</div>
				<div class="inputfield">
					<label class="dataDiri">Nama Lengkap *</label>
					<input class="diri" id="namaLengkap" name="nama" type="text" placeholder="Masukkan Nama Lengkap Anda" value="<?= $data['nama'] ?? '' ?>">
				</div>  
				<div class="inputfield">
					<label class="dataDiri">Nama Panggilan</label>
					<input class="diri" name="nama_panggilan" type="text" placeholder="Masukkan Nama Panggilan Anda" value="<?= $data['nama_panggilan'] ?? '' ?>">
				</div>  
				<div class="inputfield">
					<label class="dataDiri">Kota Lahir *</label>
					<div style="width: 100%;">
						<select class="select" name="id_kota" id="tempatLahir">
							<option value="" <?php if ($data['id_kota'] == '') echo 'selected' ?>>-Pilih Kota-</option>
							<option value="1" <?php if ($data['id_kota'] == 1) echo 'selected' ?>>Kediri</option>
							<option value="2" <?php if ($data['id_kota'] == 2) echo 'selected' ?>>Jember</option>
							<option value="3" <?php if ($data['id_kota'] == 3) echo 'selected' ?>>Blitar</option>
							<option value="4" <?php if ($data['id_kota'] == 4) echo 'selected' ?>>Tulungagung</option>
							<option value="5" <?php if ($data['id_kota'] == 5) echo 'selected' ?>>Jakarta</option>
							<option value="6" <?php if ($data['id_kota'] == 6) echo 'selected' ?>>Trenggalek</option>
							<option value="7" <?php if ($data['id_kota'] == 7) echo 'selected' ?>>Jombang</option>
							<option value="8" <?php if ($data['id_kota'] == 8) echo 'selected' ?>>Pasuruan</option>
							<option value="9" <?php if ($data['id_kota'] == 9) echo 'selected' ?>>Banyuwangi</option>
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
						<input class="radio" type="checkbox" name="id_hobi[]" value="1" <?php if (in_array(1, $data['id_hobi'])) echo 'checked' ?>> 
						<span class="pilihan">Membaca</span>
						<input class="radio2" type="checkbox" name="id_hobi[]" value="2" <?php if (in_array(2, $data['id_hobi'])) echo 'checked' ?>>
						<span class="pilihan">Menulis</span><br>
						<input class="radio" type="checkbox" name="id_hobi[]" value="3" <?php if (in_array(3, $data['id_hobi'])) echo 'checked' ?>>
						<span class="pilihan">Menyanyi</span>
						<input class="radio3" type="checkbox" name="id_hobi[]" value="4" <?php if (in_array(4, $data['id_hobi'])) echo 'checked' ?>>
						<span class="pilihan">Menari</span><br>
						<input class="radio" type="checkbox" name="id_hobi[]" value="5" <?php if (in_array(5, $data['id_hobi'])) echo 'checked' ?>>
						<span class="pilihan">Menonton Film</span><br>
					</div>
				</div> 
				<div class="inputfield">
					<label class="dataDiri">Alamat Email *</label>
					<input class="diri" id="email" name="email" type="email" placeholder="Masukkan Email" value="<?= $data['email'] ?? '' ?>">
				</div>
				<div class="inputfield">
					<label class="dataDiri">Jenis Kelamin *</label>
					<div style="width: 100%;">
						<input class="radio" name="id_jenis_kelamin" id="male" value="1" type="radio" <?php if ($data['id_jenis_kelamin'] == 1) echo 'checked' ?>/><span class="pilihan">Laki-laki</span><br>
						<input class="radio" name="id_jenis_kelamin" id="female" value="2" type="radio" <?php if ($data['id_jenis_kelamin'] == 2) echo 'checked' ?>/><span class="pilihan">Perempuan</span><br>
					</div>
				</div> 
				<div class="inputfield">
					<label class="dataDiri">Jenis Anggota *</label>
					<div style="width: 100%;">
						<select class="select" name="id_jenis_anggota" id ="jenisAnggota">
							<option value="" <?php if ($data['id_jenis_anggota'] == '') echo 'selected' ?>>-Pilih Jenis Anggota-</option>
							<option value="1" <?php if ($data['id_jenis_anggota'] == 1) echo 'selected' ?>>Pelajar</option>
							<option value="2" <?php if ($data['id_jenis_anggota'] == 2) echo 'selected' ?>>Mahasiswa</option>
							<option value="3" <?php if ($data['id_jenis_anggota'] == 3) echo 'selected' ?>>Umum</option>
							<option value="4" <?php if ($data['id_jenis_anggota'] == 4) echo 'selected' ?>>Peneliti</option>
							<option value="5" <?php if ($data['id_jenis_anggota'] == 5) echo 'selected' ?>>Karyawan</option>
						</select>
					</div>
				</div>
				<div class="inputfield">
					<label class="dataDiri">Status Perkawinan</label>
					<div style="width: 100%;">
						<input class="radio" name="id_status_perkawinan" id="belum" value="1" type="radio" <?php if ($data['id_status_perkawinan'] == 1) echo 'checked' ?>/><span class="pilihan">Belum Menikah</span><br>
						<input class="radio" name="id_status_perkawinan" id="sudah" value="2" type="radio" <?php if ($data['id_status_perkawinan'] == 2) echo 'checked' ?>/><span class="pilihan">Menikah</span><br>
					</div>
				</div>
				<div class="inputfield">
					<label class="dataDiri">Pekerjaan *</label>
					<div style="width: 100%;">
						<select class="select" name="id_pekerjaan" id="kerja">
							<option value="" <?php if ($data['id_pekerjaan'] == '') echo 'selected' ?>>-Pilih Pekerjaan-</option>
							<option value="1" <?php if ($data['id_pekerjaan'] == 1) echo 'selected' ?>>Mahasiswa</option>
							<option value="2" <?php if ($data['id_pekerjaan'] == 2) echo 'selected' ?>>Pelajar</option>
							<option value="3" <?php if ($data['id_pekerjaan'] == 3) echo 'selected' ?>>Pegawai Swasta</option>
							<option value="4" <?php if ($data['id_pekerjaan'] == 4) echo 'selected' ?>>Pegawai Negeri</option>
							<option value="5" <?php if ($data['id_pekerjaan'] == 5) echo 'selected' ?>>Wiraswasta</option>
							<option value="6" <?php if ($data['id_pekerjaan'] == 6) echo 'selected' ?>>Guru</option>
							<option value="7" <?php if ($data['id_pekerjaan'] == 7) echo 'selected' ?>>Dosen</option>
							<option value="8" <?php if ($data['id_pekerjaan'] == 8) echo 'selected' ?>>Peneliti</option>
						</select>
					</div>
				</div>
				<div class="inputfield">
					<label class="dataDiri">Alamat Tinggal *</label>
					<textarea name="alamat_tinggal" id="alamatTinggal" placeholder="Masukkan Alamat Anda sesuai Identitas" class="textarea"><?php echo $data['alamat_tinggal'] ?></textarea>
				</div>
				<div class="inputfield">
					<label class="dataDiri"> </label>
					<div style="width: 100%;">
						<select class="select" id="kotaTinggal" name="id_kota_tinggal">
							<option value="" <?php if ($data['id_kota_tinggal'] == '') echo 'selected' ?>>-Pilih Kota-</option>
							<option value="1" <?php if ($data['id_kota_tinggal'] == 1) echo 'selected' ?>>Kediri</option>
							<option value="2" <?php if ($data['id_kota_tinggal'] == 2) echo 'selected' ?>>Jember</option>
							<option value="3" <?php if ($data['id_kota_tinggal'] == 3) echo 'selected' ?>>Blitar</option>
							<option value="4" <?php if ($data['id_kota_tinggal'] == 4) echo 'selected' ?>>Tulungagung</option>
							<option value="5" <?php if ($data['id_kota_tinggal'] == 5) echo 'selected' ?>>Jakarta</option>
							<option value="6" <?php if ($data['id_kota_tinggal'] == 6) echo 'selected' ?>>Trenggalek</option>
							<option value="7" <?php if ($data['id_kota_tinggal'] == 7) echo 'selected' ?>>Jombang</option>
							<option value="8" <?php if ($data['id_kota_tinggal'] == 8) echo 'selected' ?>>Pasuruan</option>
							<option value="9" <?php if ($data['id_kota_tinggal'] == 9) echo 'selected' ?>>Banyuwangi</option>
						</select>
						<select class="select2" id="provinsi" name="id_provinsi_tinggal">
							<option value="" <?php if ($data['id_provinsi_tinggal'] == '') echo 'selected' ?>>-Pilih Provinsi-</option>
							<option value="1" <?php if ($data['id_provinsi_tinggal'] == 1) echo 'selected' ?>>Jawa Timur</option>
							<option value="2" <?php if ($data['id_provinsi_tinggal'] == 2) echo 'selected' ?>>Jawa Tengah</option>
							<option value="3" <?php if ($data['id_provinsi_tinggal'] == 3) echo 'selected' ?>>Jawa Barat</option>
							<option value="4" <?php if ($data['id_provinsi_tinggal'] == 4) echo 'selected' ?>>DKI Jakarta</option>
							<option value="5" <?php if ($data['id_provinsi_tinggal'] == 5) echo 'selected' ?>>Daerah Istimewa Yogyakarta</option>
							<option value="6" <?php if ($data['id_provinsi_tinggal'] == 6) echo 'selected' ?>>Banten</option>
							<option value="7" <?php if ($data['id_provinsi_tinggal'] == 7) echo 'selected' ?>>Sumatra Utara</option>
							<option value="8" <?php if ($data['id_provinsi_tinggal'] == 8) echo 'selected' ?>>Sumatra Barat</option>
							<option value="9" <?php if ($data['id_provinsi_tinggal'] == 9) echo 'selected' ?>>Riau</option>
						</select>
					</div>
				</div>
				<hr class="garis">
				<br>
				<b class="judul">DATA PENDIDIKAN</b>
				<div class="inputfield">
					<label class="dataDiri">Nama Institusi</label>
					<input class="diri" name="nama_institusi" id="namaInstitusi" type="text" placeholder="Masukkan Nama Sekolah/Universitas/Kantor" value="<?= $data['nama_institusi'] ?? '' ?>">
				</div>
				<div class="inputfield">
					<label class="dataDiri">Alamat Institusi</label>
					<textarea name="alamat_institusi" placeholder="Masukkan Alamat Institusi" class="textarea"><?php echo $data['alamat_institusi'] ?></textarea>
				</div>
				<div class="inputfield">
					<label class="dataDiri"> </label>
					<div style="width: 100%;">
						<select class="select" name="id_kota_institusi" id = "alamatInstitusi">
							<option value="" <?php if ($data['id_kota_institusi'] == '') echo 'selected' ?>>-Pilih Kota-</option>
							<option value="1" <?php if ($data['id_kota_institusi'] == 1) echo 'selected' ?>>Kediri</option>
							<option value="2" <?php if ($data['id_kota_institusi'] == 2) echo 'selected' ?>>Jember</option>
							<option value="3" <?php if ($data['id_kota_institusi'] == 3) echo 'selected' ?>>Blitar</option>
							<option value="4" <?php if ($data['id_kota_institusi'] == 4) echo 'selected' ?>>Tulungagung</option>
							<option value="5" <?php if ($data['id_kota_institusi'] == 5) echo 'selected' ?>>Jakarta</option>
							<option value="6" <?php if ($data['id_kota_institusi'] == 6) echo 'selected' ?>>Trenggalek</option>
							<option value="7" <?php if ($data['id_kota_institusi'] == 7) echo 'selected' ?>>Jombang</option>
							<option value="8" <?php if ($data['id_kota_institusi'] == 8) echo 'selected' ?>>Pasuruan</option>
							<option value="9" <?php if ($data['id_kota_institusi'] == 9) echo 'selected' ?>>Banyuwangi</option>
						</select>
						<select class="select2" name="id_provinsi_institusi" id = "alamatInstitusi">
							<option value="" <?php if ($data['id_provinsi_institusi'] == '') echo 'selected' ?>>-Pilih Provinsi-</option>
							<option value="1" <?php if ($data['id_provinsi_institusi'] == 1) echo 'selected' ?>>Jawa Timur</option>
							<option value="2" <?php if ($data['id_provinsi_institusi'] == 2) echo 'selected' ?>>Jawa Tengah</option>
							<option value="3" <?php if ($data['id_provinsi_institusi'] == 3) echo 'selected' ?>>Jawa Barat</option>
							<option value="4" <?php if ($data['id_provinsi_institusi'] == 4) echo 'selected' ?>>DKI Jakarta</option>
							<option value="5" <?php if ($data['id_provinsi_institusi'] == 5) echo 'selected' ?>>Daerah Istimewa Yogyakarta</option>
							<option value="6" <?php if ($data['id_provinsi_institusi'] == 6) echo 'selected' ?>>Banten</option>
							<option value="7" <?php if ($data['id_provinsi_institusi'] == 7) echo 'selected' ?>>Sumatra Utara</option>
							<option value="8" <?php if ($data['id_provinsi_institusi'] == 8) echo 'selected' ?>>Sumatra Barat</option>
							<option value="9" <?php if ($data['id_provinsi_institusi'] == 9) echo 'selected' ?>>Riau</option>
						</select>
					</div>
				</div>
				<div class="inputfield">
					<label class="dataDiri">Kelas/Semester</label>
					<input class="diri" id="kelas" name="kelas" type="text" placeholder="Masukkan Kelas/Semester" value="<?= $data['kelas'] ?? '' ?>">
				</div>
				<div class="inputfield">
					<label class="dataDiri">Jurusan</label>
					<input class="diri" name="jurusan" type="text" placeholder="Masukkan Jurusan" value="<?= $data['jurusan'] ?? '' ?>">
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
	<script src="../js/profil.js"></script>
</body>
</html>