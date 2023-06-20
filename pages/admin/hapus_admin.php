<?php
include "../../conf/conn.php";
$id_admin = $_GET['id'];
$query = ("DELETE FROM admin WHERE id_admin ='$id_admin'");
if(!mysql_query($query)){
die(mysql_error);
}else{
echo '<script>alert("Data Admin Berhasil Dihapus !!!");
window.location.href="../../index.php?page=data_admin"</script>';
}
?>