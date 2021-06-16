<?php 

class Register extends Controller {
    public function index()
    {
        $this->view('register/index');
    }

    public function registerPermission()
    {
        session_start();
        $post = $_POST;
        $new = true;

        if ($post['password'] !== $post['password2']){
            $new = false;
            $_SESSION['messages'] = 'Password dan Re-Password yang dimasukkan beda';
            header('Location: ' . BASEURL . '/register');
        }

        if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $new = false;
            $_SESSION['messages'] = 'Format Email Anda Salah';
            header('Location: ' . BASEURL . '/register');
        }

        if ( $new ) {
            $this->model('User_model')->userRegister($post);
            $dataUser = $this->model('User_model')->getUserByUsernameAndPassword($post);

            header('Location: ' . BASEURL . '/login');
        } else {
            header('Location: ' . BASEURL . '/register');
        }
    }
}

?>
