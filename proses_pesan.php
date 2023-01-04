<?php 
session_start();
include 'koneksi.php';

$akun = $_SESSION['uname'];
$nama = $_GET['nama'];
$nohp = $_GET['nohp'];
$produk = $_GET['produk'];
$harga = $_GET['harga'];
$jumlah = $_GET['jumlah'];


$kueri = mysqli_query($conn, "INSERT INTO transaksi (akun,nama,nohp,produk,harga,jumlah) VALUES ('$akun','$nama','$nohp','$produk','$harga','$jumlah')");
header("location:pesananku.php");

 ?>