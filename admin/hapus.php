<?php

include '../koneksi.php';
$id = $_GET['id'];


mysqli_query($koneksi,"delete from banding where id='$id'");

header("location: http://localhost/banding_ukt/admin");

?>
