<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $judul; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dosen/style.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dosen/profile.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  </head>

  <body>
    <div class="wrapper d-flex align-items-stretch" >
      <nav id="sidebar" style="min-width: 220px;	max-width: 220px; ">
        
        <div class="img bg-wrap text-center py-3" style="background-image: url(<?php echo base_url()?>images/bclogin.jpg)">
          <div class="user-logo">
            <div> <img src="<?php echo base_url()?>images/user.png" height="100px" width="100px"></div>
            <h3>Dosen 1</h3>
          </div>
        </div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="<?php echo base_url() ?>admin"><span class="fa fa-home mr-2"></span>Home</a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/damat"><span class="fa fa-support mr-2"></span>Data Matakuliah</a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/dados"><span class="fa fa-support mr-2"></span>Data Dosen</a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/damas"><span class="fa fa-support mr-2"></span>Data Mahasiswa</a>
          </li>
          <li>
          <a href="<?php echo base_url() ?>admin/dapro"><span class="fa fa-support mr-2"></span>Data Prodi</a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>login"><span class="fa fa-sign-out mr-2"></span> Sign Out</a>
          </li>
          <li>
            <br>
          </li>
          <li>
            <br>
          </li>
          <li>
            <br>
          </li>
          <li>
            <br>
          </li>
          <li>
            <br>
          </li>
      </nav>
