<?php session_start(); include '../koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
       <link href="../css/sb-admin-2.min.css" rel="stylesheet">




    <title>Hello, world!</title>
  </head>
  <body>



<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="admin.php" class="nav-link px-2 link-secondary">Produk</a></li>
        <li><a href="pesanan.php" class="nav-link px-2 link-dark">Pesanan</a></li>


      </ul>

      <div class="col-md-3 text-end">
<?php if (!isset($_SESSION['uname'])){?>
        <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
<?php }else{ ?>
        <a href="#"><?php echo $_SESSION['uname']; ?></a>
        <a href="../logout.php" class="btn btn-primary">Logout</a>
<?php } ?>        
      </div>
    </header>





<?php if (isset($_GET['task'])){?>


<div class="container">
<form action="tambahpr.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" required=""  class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="number" name="harga" required="" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gambar</label>
    <input type="file" name="gambar"  class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button> <a href="admin.php" class="btn btn-secondary">Batal</a>
</form>
</div>



<?php } ?>


<?php if (!isset($_GET['task'])){ ?>
<p></p>
<a href="admin.php?task=tambah" class="btn btn-primary">Tambah</a>
<?php } ?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody >

<?php 
$no = 1;
$kueri = mysqli_query($conn, "SELECT * FROM produk");
while ($row = mysqli_fetch_array($kueri)) {?>

    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $row['nama']; ?></td>
      <td><?php echo $row['harga']; ?></td>
      <td><?php echo $row['gambar']; ?></td>
      <td><a href="admin.php?id=<?php echo $row['id']; ?>"  class="btn btn-warning">Edit</a><a href="hapuspr.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a></td>
    </tr>

<?php } ?>

  </tbody>
</table>


<?php if (isset($_GET['id'])){?>


<?php 
$id = $_GET['id'];
$edit = mysqli_query($conn, "SELECT * FROM produk WHERE id=$id");
$vw = mysqli_fetch_array($edit);
 ?>

<div class="container">
<form action="editpr.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control">
    <input type="text" name="nama" value="<?php echo $vw['nama'] ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="number" name="harga" value="<?php echo $vw['harga'] ?>" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gambar</label>
    <input type="text" name="gambar" value="<?php echo $vw['gambar'] ?>" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Edit</button> <a href="admin.php" class="btn btn-secondary">Batal</a>
</form>
</div>



<?php } ?>




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



      <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>



  </body>
</html>