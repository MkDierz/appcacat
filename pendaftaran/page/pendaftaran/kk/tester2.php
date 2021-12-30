<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Membuat Alert Failed Jika  Field Kosong Saat Proses Simpan</title>
     <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php if(isset($_GET["success"])) {?>
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
		  Proses simpan <strong>berhasil</strong>!
		</div>
	<?php } ?>
	<?php if(isset($_GET["failed"])) {?>
		<div class="alert alert-danger alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
		  Proses simpan <strong>gagal</strong>!. Field tidak boleh kosong.
		</div>
	<?php } ?>
	<form method="post" action="">
		<label>Nama</label>
		<input type="text" name="kep_kel">
		<br>
		<label>Telepon</label>
		<input type="text" name="nik">
		<br>
		<label>Alamat</label>
		<textarea name="kamp"></textarea>
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
   </body>
</html>
   <?php 
if(isset($_POST["submit"])){
	$kep_kel = $_POST["kep_kel"];
	$nik = $_POST["nik"];
	$kamp = $_POST["kamp"];

	if(empty($kep_kel && $nik && $kamp)){
		header("location:login.php?failed");
	}else{
    $koneksi->query("INSERT INTO db_kk(kep_kel,nik,kamp) VALUES ('$_POST[kep_kel]','$_POST[nik]','$_POST[kamp]')");
	}
}

?>