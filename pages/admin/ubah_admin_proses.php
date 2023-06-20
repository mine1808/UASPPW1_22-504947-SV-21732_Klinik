<?php
include "../../conf/conn.php";
if($_POST)
{
$id_admin = $_POST['id_admin'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$profile = $_POST['profile'];

$query = ("UPDATE admin SET username='$username',password='$password',nama='$nama',profile='$profile' WHERE id_admin ='$id_admin'");
if(!mysql_query($query)){
die(mysql_error);
}else{
echo '<script>alert("Data Admin Berhasil Diubah !!!");
window.location.href="../../index.php?page=data_admin"</script>';
}
}
?>