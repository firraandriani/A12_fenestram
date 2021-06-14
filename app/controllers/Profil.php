<?php 

class Profil extends Controller {
    public function index()
    {
        $data = $this->model('Profil_model')->getProfile();

        $data['id_hobi'] = explode(',', $data['id_hobi']);

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