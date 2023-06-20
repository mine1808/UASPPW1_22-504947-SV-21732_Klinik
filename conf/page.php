<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_pasien':
    include 'pages/pasien/data_pasien.php';
    break;
    case 'tambah_pasien':
      include 'pages/pasien/tambah_pasien.php';
      break;
    case 'ubah_pasien';
      include 'pages/pasien/ubah_pasien.php';
      break;
  case 'data_dokter':
      include 'pages/dokter/data_dokter.php';
      break;
    case 'tambah_dokter':
      include 'pages/dokter/tambah_dokter.php';
      break;
    case 'ubah_dokter';
      include 'pages/dokter/ubah_dokter.php';
      break;
  case 'data_admin':
      include 'pages/admin/data_admin.php';
      break;
    case 'tambah_admin':
      include 'pages/admin/tambah_admin.php';
      break;
    case 'ubah_admin';
      include 'pages/admin/ubah_admin.php';
      break;
  }
}else{
    include "pages/beranda.php";
  }
?>