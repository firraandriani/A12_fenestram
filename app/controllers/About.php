<?php 

class About extends Controller {
    public function index($nama='Default',$prodi='Default')
    {
        $data['nama'] = $nama;
        $data['prodi'] = $prodi;
        $this->view('about/index',$data);
    }

    public function page()
    {
        $this->view('about/page');
    }
} 

?>