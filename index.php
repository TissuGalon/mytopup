<?php 
session_start();
include 'koneksi.php';

if (!isset($_SESSION['uname'])) {
	header("location:home.php");
}elseif ($_SESSION['uname'] == "admin") {
	header("location:admin/admin.php");
}elseif ($_SESSION['uname'] == "user") {
	header("location:home.php");
}else{
	header("location:home.php");
}

 ?>