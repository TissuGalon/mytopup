<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Checkout example · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
       <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">



<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="home.php" class="nav-link px-2 link-secondary">Home</a></li>
<?php if (isset($_SESSION['uname'])){ ?>
        <li><a href="pesananku.php" class="nav-link px-2 link-dark">Pesananku</a></li>
<?php } ?>

      </ul>

      <div class="col-md-3 text-end">
<?php if (!isset($_SESSION['uname'])){?>
        <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
<?php }else{ ?>
        <a href="#"><?php echo $_SESSION['uname']; ?></a>
        <a href="logout.php" class="btn btn-primary">Logout</a>
<?php } ?>        
      </div>
    </header>




<div class="container">


  <main>
    




    <div class="row g-5">


      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
        </h4>
        
<?php 
include 'koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM produk WHERE id = $id");
$row = mysqli_fetch_array($query);

 ?>
        <form class="card p-2" action="proses_pesan.php" method="GET">
          <input type="hidden" name="username" value="<?php echo $_SESSION['uname'] ?>">
          <label>Nama :</label>
          <div class="input-group"><input type="text" value="<?php echo $_SESSION['uname'] ?>"  class="form-control" name="nama" required></div>

          <label>No HP :</label>
          <div class="input-group"><input type="number"  class="form-control" name="nohp" required=""></div>

          <label>Produk :</label>
          <div class="input-group"><input type="text" value="<?php echo $row['nama'] ?>"   class="form-control" name="produk" readonly></div>

          <label>Harga :</label>
          <div class="input-group"><input type="number" value="<?php echo $row['harga'] ?>"  class="form-control" name="harga" readonly></div>

          <label>Jumlah :</label>
          <div class="input-group"><input type="number" value="1"  class="form-control" name="jumlah"></div>

    
          <label>.</label>
          <div class="input-group"><input type="submit" value="Pesan"  class="btn btn-primary">  <a href="index.php?ket=drink" class="btn btn-secondary">Kembali</a></div>


        </form>
      </div>



      <div class="col-md-7 col-lg-8">
        <img src="images/<?php echo $row['gambar'] ?>" style="height: 500px; width: 500px;" class="img">
      </div>
    </div>
  </main>

 
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">.</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Genta Sadewa - Ft. M Kholis</p>
  </footer>


</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
