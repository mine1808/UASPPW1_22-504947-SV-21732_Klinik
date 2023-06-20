<?php
include "../../conf/conn.php";
$id_dokter = $_GET['id'];
$query = ("DELETE FROM dokter WHERE ID_Dokter ='$id_dokter'");
if(!mysql_query($query)){
die(mysql_error);
}else{
echo '<script>alert("Data Dokter Berhasil Dihapus !!!");
window.location.href="../../index.php?page=data_dokter"</script>';
}
?>