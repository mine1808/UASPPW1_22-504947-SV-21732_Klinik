<?php
include "../../conf/conn.php";
if($_POST)
{
$id_pasien = $_POST['ID_Pasien'];
$nama_pasien = $_POST['Nama_Pasien'];
$tanggal_lahir = $_POST['Tanggal_Lahir'];
$alamat = $_POST['Alamat'];
$jenis_kelamin = $_POST['Jenis_Kelamin'];

$query = ("UPDATE pasien SET Nama_Pasien='$nama_pasien',Tanggal_Lahir='$tanggal_lahir',Alamat='$alamat',Jenis_Kelamin='$jenis_kelamin' WHERE ID_Pasien ='$id_pasien'");
if(!mysql_query($query)){
die(mysql_error);
}else{
echo '<script>alert("Data Pasien Berhasil Diubah !!!");
window.location.href="../../index.php?page=data_pasien"</script>';
}
}
?>