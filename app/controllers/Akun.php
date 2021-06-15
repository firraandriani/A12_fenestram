<?php 

class Akun extends Controller {
    public function index() 
    {
        session_start();
        $id = $_SESSION['id'];
        $data = $this->model('User_model')->getUserById($id);

        $this->view('akun/index', $data);
    }

    public function update()
    {
        $post = $_POST;
        $result = $this->model('User_model')->updateUser($post);

        if ( $result > 0 ) {
            header('Location: ' . BASEURL . '/akun');
        } else {
            header('Location: ' . BASEURL . '/akun');
        }
    }
}


?>