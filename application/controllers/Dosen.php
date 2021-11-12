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

    public function profil(){

        $data['judul'] = 'Profile - MyClass STMIK Mardira Indonesia';
        $this->load->view('dosen/template/header.php', $data);
        $this->load->view('dosen/profil.php');
        $this->load->view('dosen/template/footer.php');
    }

    public function eprofil(){

        $data['judul'] = 'Edit Profile - MyClass STMIK Mardira Indonesia';
        $this->load->view('dosen/template/header.php', $data);
        $this->load->view('dosen/eprofil.php');
        $this->load->view('dosen/template/footer.php');
    }

    public function edit(){

        $data['judul'] ='Edit Materi - MyClass STMIK Mardira Indonesia';
        $this->load->view('dosen/template/header.php', $data);
        $this->load->view('dosen/edit.php');
        $this->load->view('dosen/template/footer.php');
    }

    public function tambah(){

        $data['judul'] ='Tambah Materi - MyClass STMIK Mardira Indonesia';
        $this->load->view('dosen/template/header.php', $data);
        $this->load->view('dosen/tambah.php');
        $this->load->view('dosen/template/footer.php');
    }
    public function absen(){

        $data['judul'] = 'Kehadiran Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('dosen/template/header.php', $data);
        $this->load->view('dosen/absen.php');
        $this->load->view('dosen/template/footer.php');  
    }

    public function laporan(){

        $data['judul'] = 'Laporan Kehadiran Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('dosen/template/header.php', $data);
        $this->load->view('dosen/laporan.php');
        $this->load->view('dosen/template/footer.php');  
    }

}
?>