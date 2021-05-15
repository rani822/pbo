<?php

include '../koneksi.php';

session_start();

if($_SESSION['status'] != "login") {
    header("location:../index.php");
}

echo "selamat datang"

?>