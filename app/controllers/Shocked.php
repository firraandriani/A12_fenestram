<?php 

class Shocked extends Controller {
    public function index() 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);

        $data['nama'] = $user['nama'];

        $this->view('shocked/index', $data);
    }
}


?>