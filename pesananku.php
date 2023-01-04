<?php session_start();

if (!isset($_SESSION['uname'])) {
  header("location:login.php");
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.min.css">

       <link href="css/sb-admin-2.min.css" rel="stylesheet">
       <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <title>Hello, world!</title>
  </head>
  <body>
    

 
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




<main>
<table class="table table-hover">

<?php 
include 'koneksi.php';

$no = 1;
$akun = $_SESSION['uname'];

$result = mysqli_query($conn,"SELECT * FROM transaksi WHERE akun ='$akun'");
$hitung = mysqli_num_rows($result);
 ?>

  <thead>
    <?php if ($hitung < 1) {
      
    }else{ ?>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">No HP</th>
      <th scope="col">Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
    </tr>

  <?php } ?>
  </thead>


  <tbody>


    



<?php if ($hitung < 1) { ?>
    
    <h1 style="text-align: center; ">Anda Belum Melakukan Pemesanan !</h1>

<?php }else{
?>

    <?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['nohp'] ?></td>
      <td><?php echo $row['produk'] ?></td>
      <td>Rp. <?php echo $row['harga'] ?></td>
      <td><?php echo $row['jumlah'] ?></td>

    </tr>
    <?php } ?> 



  <?php } ?>





  </tbody>


</table>

</main>


  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">.</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Genta Sadewa - Ft. M Kholis</p>
  </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>