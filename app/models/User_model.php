<?php

class User_model {
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getUserByUsernameAndPassword($data)
    {
        $this->db->query('SELECT * FROM user WHERE email=:email AND password=:password');
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->single();
    }

    public function userLogin($data)
    {
        $email = $data['email'];
        $password = $data['password'];

        $this->db->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $this->db->execute();

        return $this->db->single();
    }

    public function userRegister($data)
    {
        $query = "INSERT INTO user (email, password, nama) VALUES (:email, :password, :nama)";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama', $data['nama']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function setProfileId($id_profil)
    {
        session_start();
        $id_user = $_SESSION['id'];

        $query = "UPDATE user SET id_profil = :id_profil WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_profil', $id_profil);
        $this->db->bind('id_user', $id_user);
        $this->db->execute();

        return $this->db->rowCount();
    }
}