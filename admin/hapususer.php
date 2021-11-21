<?php

include '../koneksi.php';
$id_user = $_GET['id_user'];


mysqli_query($koneksi,"delete from tb_user where id_user='$id_user'");

header("location: http://localhost/banding_ukt/admin/usermanagement.php");

?>