<?php 

$ambil = $koneksi->query("SELECT * FROM db_rekap1 WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM db_rekap1 WHERE id='$_GET[id]'");
 
echo "<script>alert('Data Penduduk Telah Terhapus');</script>";
echo "<script>location='index.php?page=rekap1';</script>";

?>
