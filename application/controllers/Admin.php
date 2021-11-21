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
    
    public function damat(){

        $data['judul'] = 'Pemograman Web IoT - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/damat.php');
        $this->load->view('admin/template/footer.php');
    }

    public function adddamat(){

        $data['judul'] = 'Pemograman Web IoT - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/adddamat.php');
        $this->load->view('admin/template/footer.php');
    }

    public function matkul(){

        $data['judul'] = 'Pemograman Web IoT - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/matkul.php');
        $this->load->view('admin/template/footer.php');
    }

    public function edamat(){

        $data['judul'] = 'Pemograman Web IoT - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/edamat.php');
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

    public function dados(){

        $data['judul'] = 'Data Dosen - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/dados.php');
        $this->load->view('admin/template/footer.php');
    }

    public function adddados(){

        $data['judul'] = 'Data Dosen - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/adddados.php');
        $this->load->view('admin/template/footer.php');
    }

    public function damas(){

        $data['judul'] = 'Data Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/damas.php');
        $this->load->view('admin/template/footer.php');
    }

    public function adddamas(){

        $data['judul'] = 'Data Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/adddamas.php');
        $this->load->view('admin/template/footer.php');
    }

    public function mprofil(){

        $data['judul'] = 'Data Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/mprofil.php');
        $this->load->view('admin/template/footer.php');
    }

    public function emprofil(){

        $data['judul'] = 'Data Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/emprofil.php');
        $this->load->view('admin/template/footer.php');
    }

    public function dapro(){

        $data['judul'] = 'Data Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/dapro.php');
        $this->load->view('admin/template/footer.php');
    }

    public function adddapro(){

        $data['judul'] = 'Data Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/adddapro.php');
        $this->load->view('admin/template/footer.php');
    }

    public function edapro(){

        $data['judul'] = 'Data Mahasiswa - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/edapro.php');
        $this->load->view('admin/template/footer.php');
    }

}
?>