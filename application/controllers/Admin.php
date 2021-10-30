<?php

class Admin extends CI_Controller{

    public function index(){

        $data['judul'] = 'Admin - MyClass STMIK Mardira Indonesia';
        $this->load->view('admin/template/header.php', $data);
        $this->load->view('admin/index.php');
        $this->load->view('template/footer.php');

    }
}
?>