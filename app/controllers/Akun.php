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
        session_start();
        $post = $_POST;
        $result = $this->model('User_model')->updateUser($post);

        if ($post['password'] !== $post['password2']){
            $new = false;
            $_SESSION['messages'] = 'Password dan Re-Password yang dimasukkan beda';
            header('Location: ' . BASEURL . '/akun');
        }

        if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $new = false;
            $_SESSION['messages'] = 'Format Email Anda Salah';
            header('Location: ' . BASEURL . '/akun');
        }

        if ( $result > 0 ) {
            header('Location: ' . BASEURL . '/akun');
        } else {
            header('Location: ' . BASEURL . '/akun');
        }
    }
}


?>