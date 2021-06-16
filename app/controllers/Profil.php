<?php 

class Profil extends Controller {
    public function index()
    {
        $data = $this->model('Profil_model')->getProfile();

        if (!empty($data)) {
            $data['id_hobi'] = explode(',', $data['id_hobi']);
        }

        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);

        $data['nama'] = $user['nama'];

        $this->view('profil/index', $data);
    }

    public function profilIsi()
    {
        session_start();
        $post = $_POST;
        $result = $this->model('Profil_model')->simpanData($post);

        if (empty($post['id_provinsi_tinggal'])){
            $new = false;
            $_SESSION['messages'] = 'Pilih Provinsi Tinggal Anda';
            header('Location: ' . BASEURL . '/profil');
        }

        if (empty($post['id_kota_tinggal'])){
            $new = false;
            $_SESSION['messages'] = 'Pilih Kota Tinggal Anda';
            header('Location: ' . BASEURL . '/profil');
        }

        if (empty($post['alamat_tinggal'])){
            $new = false;
            $_SESSION['messages'] = 'Masukkan Alamat Tinggal Anda';
            header('Location: ' . BASEURL . '/profil');
        }
        
        if (empty($post['id_pekerjaan'])){
            $new = false;
            $_SESSION['messages'] = 'Pilih Pekerjaan Anda';
            header('Location: ' . BASEURL . '/profil');
        }

        if (empty($post['id_jenis_anggota'])){
            $new = false;
            $_SESSION['messages'] = 'Pilih Jenis Anggota';
            header('Location: ' . BASEURL . '/profil');
        }

        if (empty($post['id_jenis_kelamin'])){
            $new = false;
            $_SESSION['messages'] = 'Masukkan Jenis Kelamin Anda';
            header('Location: ' . BASEURL . '/profil');
        }

        if (empty($post['tanggal_lahir'])){
            $new = false;
            $_SESSION['messages'] = 'Masukkan Tanggal Lahir Anda';
            header('Location: ' . BASEURL . '/profil');
        }
        
        if (empty($post['id_kota'])){
            $new = false;
            $_SESSION['messages'] = 'Pilih Kota Lahir';
            header('Location: ' . BASEURL . '/profil');
        }

        if ( $result > 0 ) {
            $this->model('User_model')->setProfileId($result);

            header('Location: ' . BASEURL . '/profil');
        } else {
            header('Location: ' . BASEURL . '/profil');
        }
    }
} 

?>