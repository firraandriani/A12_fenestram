function validasi(){
    
    var validated = true;

    var nis = document.getElementById('nis');
    var namaLengkap = document.getElementById('namaLengkap');
    var tempatLahir = document.getElementById('tempatLahir');
    var email = document.getElementById('email');
    var tanggal = document.getElementById('tanggal');
    var radios = document.getElementsByName("JenisKelamin");
    var jenisAnggota = document.getElementById('jenisAnggota');
    var kerja = document.getElementById('kerja');
    var alamatTinggal = document.getElementById('alamatTinggal');
    var kotaTinggal = document.getElementById('kotaTinggal');
    var provinsi = document.getElementById('provinsi');
    var namaInstitusi = document.getElementById('namaInstitusi');
    var kelas = document.getElementById('kelas');

    if (nis.value == "") {
        alert("NIS/NIM/NIP tidak boleh kosong");
        nis.focus();
        validated = false;
        return false;
    }

    if (namaLengkap.value == "") {
        alert("Nama Lengkap tidak boleh kosong");
        namaLengkap.focus();
        validated = false;
        return false;
    }

    if (tempatLahir.selectedIndex < 1) {
        alert("Pilih Kota Lahir");
        tempatLahir.focus();
        validated = false;
        return false;
    }

    if (tanggal.value == "") {
        alert("Tanggal Lahir tidak boleh kosong");
        tanggal.focus();
        validated = false;
        return false;
    }

    if (email.value == "") {
        alert("Alamat Email tidak boleh kosong");
        email.focus();
        validated = false;
        return false;
    }
    
    var data = null;
    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            data = radios[i].value;
                break;
            }
    }

    if (!data) {
        alert('Pilih Jenis Kelamin');
        radios.focus();
        validated = false;
        return false;
    }

    if (jenisAnggota.selectedIndex < 1) {
        alert("Pilih Jenis Anggota");
        jenisAnggota.focus();
        validated = false;
        return false;
    }

    if (kerja.selectedIndex < 1) {
        alert("Pilih Pekerjaan");
        kerja.focus();
        validated = false;
        return false;
    }

    if (alamatTinggal.value == "") {
        alert("Alamat Tinggal tidak boleh kosong");
        alamatTinggal.focus();
        validated = false;
        return false;
    }

    if (kotaTinggal.selectedIndex < 1) {
        alert("Kota Tinggal tidak boleh kosong");
        kotaTinggal.focus();
        validated = false;
        return false;
    }

    if (provinsi.selectedIndex < 1) {
        alert("Provinsi Tinggal tidak boleh kosong");
        provinsi.focus();
        validated = false;
        return false;
    }

    if (namaInstitusi.value == "") {
        alert("Nama Institusi tidak boleh kosong");
        namaInstitusi.focus();
        validated = false;
        return false;
    }

    if (kelas.value == "") {
        alert("Kelas/Semester tidak boleh kosong");
        kelas.focus();
        validated = false;
        return false;
    }

    if (validated) {
        window.location.href = './beranda.html';
    }
}