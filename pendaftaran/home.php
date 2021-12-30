<h2> Selamat Datang </h2>
<?php $ambil = $koneksi->query("SELECT * FROM db_admin "); ?>
<?php while($admin = $ambil->fetch_assoc()){ ?>
<h3><?php echo $admin['nama_lengkap']; ?></h3>

<form method="POST" action="index.php?page=tambahkk">
 <input type="checkbox" name="checkbox" value="check"  />
 <input type="submit" name="syarat" value="submit" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}"  />
</form>

<?php }

if(empty($_POST['agree']) || $_POST['agree'] != 'agree') {
}

 ?> 
Senang Dapat Bertemu Anda Kembali :)
