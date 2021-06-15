<?php 

class Catatan extends Controller {
    public function index() 
    {
        $data['catatan'] = $this->model('Catatan_model')->getallcatatan();
        $this->view('catatan/index', $data);
    }

    public function tambah()
    {
        if( $this->model('Catatan_model')->tambahCatatan($_POST) > 0){
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
}




?>