<?php 
session_start();
include '../koneksi.php';
$id = $_GET['id'];
$nama = $_GET['nama'];
$harga = $_GET['harga'];
$gambar = $_GET['gambar'];

$kueri = mysqli_query($conn, "UPDATE produk SET nama='$nama', harga='$harga', gambar='$gambar' WHERE id=$id");
header("location:admin.php");
 ?>