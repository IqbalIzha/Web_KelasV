<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($koneksi,"insert into tb_user values('','$username','$password','mahasiswa')");


header("location: http://localhost/banding_ukt");

 ?>
