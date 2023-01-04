<?php 
session_start();
include '../koneksi.php';
$id = $_POST['id'];
$kueri = mysqli_query($conn, "SELECT * FROM produk WHERE id_jenis='$id'");

$data = array();
while ($row = mysqli_fetch_assoc($kueri)) {
	$data[] = $row;
}

echo json_encode($data);

 ?>