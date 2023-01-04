<?php 
session_start();
include 'koneksi.php';
 
$id = $_POST['id'];
$password = $_POST['pass'];

$data = mysqli_query($conn,"select * from login where id='$id' and pass='$password'");
$row = mysqli_fetch_array($data);

$cek = mysqli_num_rows($data);
 
if($cek > 0){
  $_SESSION['uname'] = $id;
  $_SESSION['status'] = "login";
  $_SESSION['role'] = $row['role'];
    echo '<script>window.location.replace("index.php");</script>';
}else{
    echo '<script>alert("Login Gagal !")</script>'; 
	echo '<script>window.location.replace("login.php");</script>';
}
?>