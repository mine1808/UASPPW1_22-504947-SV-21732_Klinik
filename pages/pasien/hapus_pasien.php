<?php
include "../../conf/conn.php";
$id_pasien = $_GET['id'];
$query = ("DELETE FROM pasien WHERE ID_Pasien ='$id_pasien'");
if(!mysql_query($query)){
die(mysql_error);
}else{
echo '<script>alert("Data Pasien Berhasil Dihapus !!!");
window.location.href="../../index.php?page=data_pasien"</script>';
}
?>