<?php
include "../../conf/conn.php";
if($_POST)
{
$id_dokter = $_POST['ID_Dokter'];
$nama_dokter = $_POST['Nama_Dokter'];
$spesialisasi = $_POST['Spesialisasi'];
$alamat = $_POST['Alamat'];
$nomor_telepon = $_POST['Nomor_Telepon'];

$query = ("UPDATE dokter SET Nama_Dokter='$nama_dokter',Spesialisasi='$spesialisasi',Alamat='$alamat',Nomor_Telepon='$nomor_telepon' WHERE ID_Dokter ='$id_dokter'");
if(!mysql_query($query)){
die(mysql_error);
}else{
echo '<script>alert("Data Dokter Berhasil Diubah !!!");
window.location.href="../../index.php?page=data_dokter"</script>';
}
}
?>