<?php 


class Catatan_model{
    private $table = 'catatan_user';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getallcatatan(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function tambahCatatan($data){
        $tanggal = $data['tanggalBaca'];
        $judul = $data['judulBuku'];
        $query = "INSERT INTO catatan_user(jadwal_baca,judul_buku) VALUES ('$tanggal','$judul')";
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




}
?>