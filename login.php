<?php
include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];

$periksa= mysqli_query("SELECT * FROM user where username='$username' AND password='$password'");


$sama = mysqli_num_rows($periksa);

if ($sama > 0) 
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location:admin/index.php") 
} else {
    header("location:index.php");
}


?>