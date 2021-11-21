<?php

$error='';

include "koneksi.php";
if(isset($_POST['submit']))
{
    $username   = $_POST['username'];
    $password   = md5($_POST['password']);


    $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        
        $error = "Username or Password is invalid";
        header("location: http://localhost/banding_ukt/index.php");
        echo "<script>alert('User atau Password Salah');window.location=index.php;</script>";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        $_SESSION['user_role'] = $row['user_role'];

        if($row['user_role'] == "admin")
        {
            session_start();
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['username'] = $username;
            $_SESSION['user_role'] = $row['user_role'];
            header("Location: admin/index.php");
        }

        else if($row['user_role'] == "mahasiswa")
        {
            session_start();
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['username'] = $username;
            $_SESSION['user_role'] = $row['user_role'];
            header("Location: mahasiswa/index.php");
        }
        else
        {
            $error = "Failed Login";
                 
        }
    }
}
?>
