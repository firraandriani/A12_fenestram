<?php 

class Catatan extends Controller {
    public function index() 
    {   
        session_start();
        $data['catatan'] = $this->model('Catatan_model')->getallcatatan($_SESSION["id"]);

        $user = $this->model('User_model')->getUserById($_SESSION["id"]);
        $data['nama'] = $user['nama'];

        $this->view('catatan/index', $data);
    }

    public function tambah()
    {   
        session_start();
        if( $this->model('Catatan_model')->tambahCatatan($_POST, $_SESSION["id"]) > 0){
            header('Location: '. BASEURL . '/catatan');
            exit;
        }
    }
    
    public function hapus($id)
    {
        if( $this->model('Catatan_model')->hapusCatatan($id) > 0){
            header('Location: '. BASEURL . '/catatan');
            exit;
        }
    }

    public function edit($id) 
    {   
        session_start();
        $id_catatan = $id;
        $data = $this->model('Catatan_model')->getCatatanById($id);
        
        $user = $this->model('User_model')->getUserById($_SESSION["id"]);
        $data['nama'] = $user['nama'];
        
        $this->view('catatan/edit', $data, $id_catatan);
    }

    public function update($id)
    {
        $this->model('Catatan_model')->updateCatatan($_POST, $id_catatan);
        header('Location: '. BASEURL . '/catatan');
        exit;
        
    }
}
?>