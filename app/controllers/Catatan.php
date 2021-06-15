<?php 

class Catatan extends Controller {
    public function index() 
    {   
        session_start();
        $data['catatan'] = $this->model('Catatan_model')->getallcatatan($_SESSION["id"]);
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
        $data['data_catatan'] = $this->model('Catatan_model')->getCatatanById($id);
        $this->view('catatan/edit', $data['data_catatan'], $id_catatan);
    }

    public function update($id)
    {
        $this->model('Catatan_model')->updateCatatan($_POST, $id);
        header('Location: '. BASEURL . '/catatan');
        exit;
        
    }


}
?>