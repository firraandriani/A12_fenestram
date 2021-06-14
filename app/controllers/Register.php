<?php 

class Register extends Controller {
    public function index()
    {
        $this->view('register/index');
    }

    public function registerPermission()
    {
        $post = $_POST;

        if ( $this->model('User_model')->userRegister($post) ) {
            $dataUser = $this->model('User_model')->getUserByUsernameAndPassword($post);

            header('Location: ' . BASEURL . '/login');
        } else {
            header('Location: ' . BASEURL . '/register');
        }
    }
}

?>
