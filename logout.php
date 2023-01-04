<?php 
    session_start();
    unset($_SESSION["uname"]);
    unset($_SESSION["status"]);
    unset($_SESSION["role"]);
    header("location:index.php?ket=drink")
 ?>