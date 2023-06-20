<?php
include "../../conf/conn.php";
if($_POST)
{
$id_pasien = $_POST['ID_Pasien'];
$nama_pasien = $_POST['Nama_Pasien'];
$tanggal_lahir = $_POST['Tanggal_Lahir'];
$alamat = $_POST['Alamat'];
$jenis_kelamin = $_POST['Jenis_Kelamin'];
$query = ("INSERT INTO pasien(ID_Pasien,Nama_Pasien,Tanggal_Lahir,Alamat,Jenis_Kelamin) VALUES ('".$id_pasien."','".$nama_pasien."','".$tanggal_lahir."','".$alamat."','".$jenis_kelamin."')");
if(!mysql_query($query)){
die(mysql_error);
}
else{echo '<script>alert("Data Pasien Berhasil Ditambahkan !!!");
window.location.href="../../index.php?page=data_pasien"</script>';
}
}
?>