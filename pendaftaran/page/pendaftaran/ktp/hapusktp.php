<?php 

$ambil = $koneksi->query("SELECT * FROM db_ktp WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM db_ktp WHERE id='$_GET[id]'");
 
echo "<script>alert('Data Penduduk Telah Terhapus');</script>";
echo "<script>location='index.php?page=ktp';</script>";

?>
