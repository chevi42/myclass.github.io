<?php

class Dosen extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){

        $data['judul'] = 'Dosen - MyClass STMIK Mardira Indonesia';
        $this->load->view('dosen/template/header.php', $data);
        $this->load->view('dosen/index.php');
        $this->load->view('dosen/template/footer.php');

    }
    
    public function matkul(){

        $data['judul'] = 'Pemograman Web IoT - MyClass STMIK Mardira Indonesia';
        $this->load->view('dosen/template/header.php', $data);
        $this->load->view('dosen/matkul.php');
        $this->load->view('dosen/template/footer.php');
    }
}
?>