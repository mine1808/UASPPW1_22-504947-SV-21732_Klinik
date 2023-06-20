<?php
include "../../conf/conn.php";
if($_POST)
{
$id_dokter = $_POST['ID_Dokter'];
$nama_dokter = $_POST['Nama_Dokter'];
$spesialisasi = $_POST['Spesialisasi'];
$alamat = $_POST['Alamat'];
$nomor_telepon = $_POST['Nomor_Telepon'];
$query = ("INSERT INTO dokter(ID_Dokter,Nama_Dokter,Spesialisasi,Alamat,Nomor_Telepon) VALUES ('".$id_dokter."','".$nama_dokter."','".$spesialisasi."','".$alamat."','".$nomor_telepon."')");
if(!mysql_query($query)){
die(mysql_error);
}
else{echo '<script>alert("Data Dokter Berhasil Ditambahkan !!!");
window.location.href="../../index.php?page=data_dokter"</script>';
}
}
?>