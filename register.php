<!DOCTYPE html>
<html lang="en">

<?php 
    session_start();
    unset($_SESSION["admin"]);
    unset($_SESSION["status"]);
 ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class=""  style="background-image: url('img/bg.jpg'); background-repeat: none; background-size: cover;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" style="background-color: #36b9cc;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register Here !</h1>
                                    </div>

<?php 
if ($_GET['status'] != 'warning') {
    
}else{

?>
                                    <div class="text-center">
                                        <h1 class="h6 bg-warning text-white mb-4">ID Sudah Digunakan !</h1>
                                    </div>
<?php } ?>
                                    <form class="user" action="reg.php" id="register" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="id" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter ID ...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                
                                        <a href="#" onclick="document.getElementById('register').submit()" class="btn btn-info btn-user btn-block">
                                            Register
                                        </a>
                                        <hr>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Kembali Ke Halaman Login</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>