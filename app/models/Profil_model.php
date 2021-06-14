<?php

class Profil_model {
    private $table = 'profil';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProfile()
    {
        session_start();
        $id_user = $_SESSION['id'];

        $query = "SELECT id_profil FROM user WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id_user);
        $this->db->execute();
        $result = $this->db->single();

        $query = "SELECT * FROM profil INNER JOIN user ON user.id_profil = profil.id WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $result['id_profil']);
        $this->db->execute();

        return $this->db->single();
    }

    public function simpanData($data)
    {
        $idHobi = implode(',', $data['id_hobi']);

        $query = "INSERT INTO profil (nomor_identitas, nama_panggilan, id_kota, tanggal_lahir, nomor_hp, id_hobi, id_jenis_kelamin, id_jenis_anggota, id_status_perkawinan, id_pekerjaan, alamat_tinggal, id_kota_tinggal, id_provinsi_tinggal, nama_institusi, alamat_institusi, id_kota_institusi, id_provinsi_institusi, kelas, jurusan) VALUES (:nomor_identitas, :nama_panggilan, :id_kota, :tanggal_lahir, :nomor_hp, :id_hobi, :id_jenis_kelamin, :id_jenis_anggota, :id_status_perkawinan, :id_pekerjaan, :alamat_tinggal, :id_kota_tinggal, :id_provinsi_tinggal, :nama_institusi, :alamat_institusi, :id_kota_institusi, :id_provinsi_institusi, :kelas, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nomor_identitas', $data['nomor_identitas']);
        $this->db->bind('nama_panggilan', $data['nama_panggilan']);
        $this->db->bind('id_kota', $data['id_kota']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('nomor_hp', $data['nomor_hp']);
        $this->db->bind('id_hobi', $idHobi);
        $this->db->bind('id_jenis_kelamin', $data['id_jenis_kelamin']);
        $this->db->bind('id_jenis_anggota', $data['id_jenis_anggota']);
        $this->db->bind('id_status_perkawinan', $data['id_status_perkawinan']);
        $this->db->bind('id_pekerjaan', $data['id_pekerjaan']);
        $this->db->bind('alamat_tinggal', $data['alamat_tinggal']);
        $this->db->bind('id_kota_tinggal', $data['id_kota_tinggal']);
        $this->db->bind('id_provinsi_tinggal', $data['id_provinsi_tinggal']);
        $this->db->bind('nama_institusi', $data['nama_institusi']);
        $this->db->bind('alamat_institusi', $data['alamat_institusi']);
        $this->db->bind('id_kota_institusi', $data['id_kota_institusi']);
        $this->db->bind('id_provinsi_institusi', $data['id_provinsi_institusi']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();

        return $this->db->getInsertedId();
    }
}