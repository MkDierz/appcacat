<?php 
session_start();
$koneksi = new mysqli("localhost","root","","capil2");
 ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Kartu Keluarga: Login</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <img src="assets/img/Dinas.png" class="user-image img-responsive"/>
                <h2> Pendaftaran : Login </h2>
               
                <h5>( Silahkan Login Untuk Masuk )</h5>
                <marquee> <h4>Selamat Datang di Dinas Kependudukan dan Pencatatan Sipil Kabupaten Aceh Tamiang</h4> </marquee>
                 <br />
            </div>
        </div>
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                        <strong>   Masukkan Username & Password </strong> 
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Masukkan Username Anda" name="user" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Masukkan Password Anda" name="pass" />
                                        </div>
                                    
                                     <button class="btn btn-primary"name="login">Login</button>

                                     
                                    <hr />
                                    </form>
                                    <?php 
                                    if (isset($_POST['login']))
                                    {
                                      $ambil = $koneksi->query("SELECT * FROM db_admin WHERE username='$_POST[user]' AND password = '$_POST[pass]'");
                                      $adminasli = $ambil->num_rows;
                                      if ($adminasli==1)
                                      {
                                        $_SESSION['db_admin']=$ambil->fetch_assoc();
                                        echo "<div class='alert alert-info'>Login Sukses</div>";
                                        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                                      }
                                      else
                                      {
                                        echo "<div class='alert alert-danger'>Login Gagal</div>";
                                        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                                      }

                                    }

                                    ?>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
