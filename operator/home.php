<h2> Selamat Datang </h2>
<?php $ambil = $koneksi->query("SELECT * FROM db_adminopkk "); ?>
<?php while($admin = $ambil->fetch_assoc()){ ?>
<h3><?php echo $admin['nama_lengkap']; ?></h3>
<?php } ?> 
Senang Dapat Bertemu Anda Kembali :)
