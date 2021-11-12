<?php

class Admin extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){

        $data['judul'] = 'Admin - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/index.php');
        $this->load->view('admin/template/footer.php');

    }
    
    public function matkul(){

        $data['judul'] = 'Pemograman Web IoT - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/matkul.php');
        $this->load->view('admin/template/footer.php');
    }

    public function profil(){

        $data['judul'] = 'Profile - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/profil.php');
        $this->load->view('admin/template/footer.php');
    }

    public function eprofil(){

        $data['judul'] = 'Edit Profile - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/eprofil.php');
        $this->load->view('admin/template/footer.php');
    }

    public function edit(){

        $data['judul'] ='Edit Materi - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/edit.php');
        $this->load->view('admin/template/footer.php');
    }

    public function tambah(){

        $data['judul'] ='Tambah Materi - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/tambah.php');
        $this->load->view('admin/template/footer.php');
    }
    public function absen(){

        $data['judul'] = 'Kehadiran Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/absen.php');
        $this->load->view('admin/template/footer.php');  
    }

    public function laporan(){

        $data['judul'] = 'Laporan Kehadiran Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/laporan.php');
        $this->load->view('admin/template/footer.php');  
    }

    public function dosen(){

        $data['judul'] = 'Data Dosen - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/dosen.php');
        $this->load->view('admin/template/footer.php');
    }

    public function mahasiswa(){

        $data['judul'] = 'Data Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/mahasiswa.php');
        $this->load->view('admin/template/footer.php');
    }

}
?>