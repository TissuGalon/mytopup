  <?php

session_start();
include 'koneksi.php';

$id = $_GET['id'];
$pass = $_GET['pass'];

  $regis = mysqli_query($conn, "INSERT INTO `login` (id, pass) VALUES('$id', '$pass')");
    echo '<script>alert("Berhasil")</script>'; 
    echo '<script>window.location.replace("login.php");</script>';


   ?>