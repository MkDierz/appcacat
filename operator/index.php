<?php 
session_start();
$koneksi = new mysqli("localhost","root","","capil2");

if (!isset($_SESSION['db_adminopkk']))
{
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}

  ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OPERATOR KARTU KELUARGA</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="index.php">Operator</a> 
            </div>
  <div style="color: white;
padding: 10px 50px 10px 50px;
float: right;
font-size: 16px;">Klik Disini Untuk >>>  
<a href="index.php?page=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>

        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/Dinas.png" class="user-image img-responsive"/>
					</li>
                    <li>
                    <a  href="index.php?page=home"><i class="fa fa-home fa-1x"></i> Home </a>
                    </li>
                    <li>
                    <a  href="index.php?page=operator"><i class="fa fa-briefcase fa-1x"></i>Verifikasi Operator </a>
                    </li>
                    </ul>
                      </li>  
        
                </ul>

            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                    <?php

                        if (isset($_GET['page']))
                {
                    if ($_GET['page']=="home")
                    {
                        include 'home.php';
                    }
                    if ($_GET['page']=="operator")
                    {
                        include 'page/operator/kk/operator.php';
                    }
                    elseif ($_GET['page']=="ubahop")
                    {
                        include 'page/operator/kk/ubahop.php';
                    }
                    elseif ($_GET['page']=="logout")
                    {
                        include 'logout.php';
                    }

                }
                else
                {
                    include 'home.php';
                }
                 ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>

        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>