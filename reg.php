<?php 
session_start();
 
include 'koneksi.php';
$id = $_POST['id'];
$password = $_POST['pass'];

$divert="id=".($id)."&pass=".($password);
 

$data = mysqli_query($conn,"select * from login where id='$id'");
 

 if(mysqli_num_rows($data)>=1)
   {
    header('Refresh: 0; URL = register.php?status=warning');
   }
 else
    {
    
	header("Location:reg2.php?$divert");
    }
?>