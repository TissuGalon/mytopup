<?php 
session_start();
include '../koneksi.php';

$id = $_GET['id'];


$kueri = mysqli_query($conn, "DELETE FROM produk WHERE id=$id");
header("location:admin.php");
 ?>