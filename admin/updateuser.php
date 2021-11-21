<?php
include 'koneksi.php';
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($koneksi,"update tb_user set username =$username password=$md5(password)" );


header("location: http://localhost/banding_ukt/admin/usermanagement.php");

 ?>
