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
  </head>

  <body>
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        
        <div class="img bg-wrap text-center py-4" style="background-image: url(<?php echo base_url()?>images/bclogin.jpg)">
          <div class="user-logo">
            <div> <img src="<?php echo base_url()?>images/user.png" height="100px" width="100px"></div>
            <h3>Dosen 1</h3>
          </div>
        </div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="<?php echo base_url() ?>admin"><span class="fa fa-home mr-3"></span>Home</a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/damat"><span class="fa fa-support mr-3"></span>Data Matakuliah</a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/dados"><span class="fa fa-support mr-3"></span>Data Dosen</a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/dama"><span class="fa fa-support mr-3"></span>Data Mahasiswa</a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>login"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
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
          <li>
            <br>
          </li>
        </ul>
      </nav>
