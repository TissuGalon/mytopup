<?php 
session_start();
include '../koneksi.php';

$nama = $_GET['nama'];
$harga = $_GET['harga'];
$gambar = $_GET['gambar'];

$kueri = mysqli_query($conn, "INSERT INTO produk (nama,harga,gambar) VALUES ('$nama','$harga','$gambar')");
header("location:admin.php");
 ?>