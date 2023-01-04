<?php include '../koneksi.php'; session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Checkout example · Bootstrap v5.1</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">



  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

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

<body style="background-color: #3160e0;">

  <div class="m-4">
    <main>


      <div class="row g-5 pt-5">

<?php 
$idg = $_GET['id'];
$kueri = mysqli_query($conn, "SELECT * FROM game WHERE id_game = '$idg'");
$row = mysqli_fetch_array($kueri);
 ?>

        <div class="col-md-5 col-lg-4">
          <img src="../images/<?php echo $row['gambar']; ?>" width="200" height="auto">
          <h4 class="d-flex justify-content-between align-items-center mt-3">
            <span class="text-light"><?php echo $row['nama_game']; ?></span>

          </h4>
          <br>
          <div class=" mb-3">
            <span class="badge bg-light text-dark p-2 rounded-pill"><small>Langsung Diterima</small></span>
            <span class="badge bg-light text-dark p-2 rounded-pill"><small>Pembayaran yang Aman</small></span>
          </div>


          <div class="text-light">
            <p>
              Top up <?php echo $row['nama_game']; ?> hanya dalam hitungan detik!
            </p>
            <p>
              Cukup masukan ID <?php echo $row['nama_game']; ?> Anda, pilih top up <?php echo $row['nama_game']; ?> yang Anda inginkan, selesaikan
              pembayaran, dan top up akan secara langsung ditambahkan ke akun <?php echo $row['nama_game']; ?> Anda.
            </p>
            <p>
              Bayarlah menggunakan Codacash, QRIS, GoPay, OVO, DANA, Bank Transfer, Telkomsel, Indosat, Tri, XL,
              Smartfren, ShopeePay, LinkAja, Kredivo, Alfamart, Indomaret, DOKU, dan kartu kredit. Tanpa perlu
              registrasi ataupun log-in.
            </p>
          </div>

        </div>



        <div class="col-md-7 col-lg-8">

          <div class="card">
            <div class="card-body">
              <div class="d-flex">
                <div>
                  <span class="badge bg-info p-3">1</span>
                </div>

                <h4 class="mb-3 m-3">Masukkan ID</h4>
              </div>

              <form class="needs-validation" novalidate>
                <div class="row g-3">

                  <div class="col-12">
                   
                    <div class="d-flex">
                      <input type="text" placeholder="Masukkan ID" class="form-control" id="gameid" placeholder="" value="" required>
                      <span class="badge bg-info rounded-pill p-3 py-2 m-1 float-right">?</span>
                      <div class="invalid-feedback m-2">
                      Bagian ini harus diisi.
                    </div>
                    </div>
                    
                    <br>
                    <small class="text-secondary">Untuk menemukan ID <?php echo $row['nama_game']; ?>. Klik profil user di pojok kiri
                      atas. Pilih menu profil di sebelah kanan atas dan temukan ID-mu di atas foto profil.</small>
                  </div>


                </div>

     
            </div>

          </div>

          <br>

          <div class="card">
            <div class="card-body">
              <div class="d-flex">
                <div>
                  <span class="badge bg-info p-3">2</span>
                </div>

                <h4 class="mb-3 m-3">Pilihan Nominal Top Up</h4>
              </div>


<script>
  var ajax = new XMLHttpRequest();

  function ubah(nilai){

    var id_jenis = nilai;

    ajax.open("POST", "get_produk.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("id="+ id_jenis);
    ajax.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        console.log(data);
        console.log(id_jenis);
        var html = "";

        for(var i = 0; i < data.length; i++){
          var id = data[i].id;
          var gambar = data[i].gambar;
          var nama = data[i].nama;
          html += "<tr>";
          html += "<label class='m-3'>";
          html += "<input type='radio' name='produk' value='small'>";
          html += "<small>"+nama+"</small>";
          html += "<br>";
          html += "<img src='../images/"+gambar+"' width='120' height='auto' alt='Option 1'>";
          html += "</label>";      
        }
        //replacing to table
        document.getElementById("viewdata").innerHTML = html;

                    
      }
    }
  }
</script>
   
                <div class="row g-3">

                  <div class="col-12">
                    <label for="" class="form-label">Pilih Kategori</label>

                    <p></p>
<?php 

$qkat = mysqli_query($conn, "SELECT * FROM jenis_produk WHERE id_game ='$idg' ");
while ($vkat = mysqli_fetch_array($qkat)) {
 ?>                    
                    <label class="m-2">
                      <input type="radio" name="jenis" onchange="ubah(<?php echo $vkat['id_jenis'] ?>)" id="jenis" value="<?php echo $vkat['id_jenis'] ?>" >
                      <small><?php echo $vkat['nama']; ?></small>
                      <br>
                      <img src="../images/<?php echo $vkat['gambar'] ?>" width="120" height="auto" alt="Option 1">
                    </label>

<?php } ?>                    


                    <div class="invalid-feedback">
                      Bagian ini harus diisi.
                    </div>
                    <br>

                  </div>


                  <div class="col-12">
                    <label for="" class="form-label">Pilih Item</label>
                    <p></p>
                
                <div id="viewdata">
                  
                </div>

                 


                  </div>


                </div>

    

            </div>

          </div>

          <br>

          <div class="card">
            <div class="card-body">
              <div class="d-flex">
                <div>
                  <span class="badge bg-info p-3">3</span>
                </div>

                <h4 class="mb-3 m-3">Pilihan Metode Pembayaran</h4>
              </div>


                <div class="row g-3">

                  <div class="col-12">
                    <p></p>
                    <label class="col-12 mt-2 border p-2">
                      <input type="radio" name="test1" value="small">
                      <img src="../images/ml.webp" width="120" height="auto" alt="Option 1">
                    </label>

                    <label class="col-12 mt-2 border p-2">
                      <input type="radio" name="test1" value="small">
                      <img src="../images/ml.webp" width="120" height="auto" alt="Option 1">
                    </label>

                    <div class="invalid-feedback">
                      Bagian ini harus diisi.
                    </div>
                    <br>

                  </div>


                </div>

  
            </div>

          </div>

          <br>

          <div class="card">
            <div class="card-body">
              <div class="d-flex">
                <div>
                  <span class="badge bg-info p-3">4</span>
                </div>

                <h4 class="mb-3 m-3">Beli!</h4>
              </div>


                <div class="row g-3">

                  <div class="col-12">
                    <label for="firstName" class="form-label"><small>Optional: Jika anda ingin mendapatkan bukti pembayaran atas pembelian anda, harap mengisi alamat emailnya</small></label>
                    <div class="d-flex">
                      <input type="email" class="form-control" id="email" placeholder="Alamat Email @" value="" required>
                    </div>

                    <div class="invalid-feedback">
                      Bagian ini harus diisi.
                    </div>
                    <br>
                    
             

                      <button class="btn btn-primary mt-3 ">Beli Sekarang</button>

                  </div>


                </div>

              </form>

            </div>

          </div>



        </div>




      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017–2021 Company Name</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>


  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>
</body>

</html>