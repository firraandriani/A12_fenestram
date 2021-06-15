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
        $post = $_POST;
        $result = $this->model('Profil_model')->simpanData($post);

        if ( $result > 0 ) {
            $this->model('User_model')->setProfileId($result);

            header('Location: ' . BASEURL . '/profil');
        } else {
            header('Location: ' . BASEURL . '/profil');
        }
    }
} 

?>