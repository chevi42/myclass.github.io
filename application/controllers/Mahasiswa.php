<?php

class Mahasiswa extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){

        $data['judul'] = 'Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('mahasiswa/template/header.php', $data);
        $this->load->view('mahasiswa/index.php');
        $this->load->view('mahasiswa/template/footer.php');

    }
    
    public function matkul(){

        $data['judul'] = 'Pemograman Web IoT - MyClass STMIK Mardira Indonesia';
        $this->load->view('mahasiswa/template/header.php', $data);
        $this->load->view('mahasiswa/matkul.php');
        $this->load->view('mahasiswa/template/footer.php');
    }

    public function profil(){

        $data['judul'] = 'Profile - MyClass STMIK Mardira Indonesia';
        $this->load->view('mahasiswa/template/header.php', $data);
        $this->load->view('mahasiswa/profil.php');
        $this->load->view('mahasiswa/template/footer.php');
    }

    public function eprofil(){

        $data['judul'] = 'Edit Profile - MyClass STMIK Mardira Indonesia';
        $this->load->view('mahasiswa/template/header.php', $data);
        $this->load->view('mahasiswa/eprofil.php');
        $this->load->view('mahasiswa/template/footer.php');
    }

}
?>