<?php
include "../../conf/conn.php";
if($_POST)
{
$id_admin = $_POST['id_admin'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$profile = $_POST['profile'];
$query = ("INSERT INTO admin(id_admin,username,password,nama,profile) VALUES ('".$id_admin."','".$username."','".$password."','".$nama."','".$profile."')");
if(!mysql_query($query)){
die(mysql_error);
}
else{echo '<script>alert("Data Admin Berhasil Ditambahkan !!!");
window.location.href="../../index.php?page=data_admin"</script>';
}
}
?>