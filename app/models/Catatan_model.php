<?php 


class Catatan_model{
    private $table = 'catatan_user';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getallcatatan($id){
        $this->db->query('SELECT * FROM catatan_user WHERE id_user = '.$id);
        return $this->db->resultSet();
    }

    public function getCatatanById($id){
        $this->db->query('SELECT * FROM catatan_user WHERE id_catatan = '.$id);
        return $this->db->single();
    }

    public function tambahCatatan($data, $id){
        $tanggal = $data['tanggalBaca'];
        $judul = $data['judulBuku'];
        $query = "INSERT INTO catatan_user(id_user,jadwal_baca,judul_buku) VALUES ($id,'$tanggal','$judul')";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusCatatan($id)
    {
        $query = "DELETE FROM catatan_user WHERE id_catatan = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateCatatan($data, $id)
    {
        $tanggal = $data['tanggalBaca'];
        $judul = $data['judulBuku'];
        $query = "UPDATE `catatan_user` SET `jadwal_baca`=$tanggal,`judul_buku`='$judul' WHERE id_catatan=$id";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }




}
?>