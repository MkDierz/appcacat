<!DOCTYPE html>
<html>
<head>
	<title>REKAP DATA KEPENDUDUKAN</title>
</head>
<body>

	<center>

		<h2>HASIL REKAP DATA KEPENDUDUKAN<br/>

		<?php 
		include 'koneksi.php';
		?>

		<br/><br/><br/>

		<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<input type="submit" value="FILTER">
		</form>

		<br/> <br/>

		<table border="1">
			<tr>
				<th>No</th>
				<th>induk</th>
				<th>keripik banano</th>
				<th>thabita</th>
				<th>leslar</th>
				<th>lesti</th>
				<th>billar</th>
				<th>dede</th>
				<th>alamat</th>
			</tr>

			<?php 
			$no = 1;

			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$sql = mysqli_query($koneksi,"select * from db_kk where tgl_pengambilan='$tgl'");
			}else{
				$sql = mysqli_query($koneksi,"select * from db_rekap1");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['ayam']; ?></td>
				<td><?php echo $data['pedas_manis']; ?></td>
				<td><?php echo $data['donat_kentang']; ?></td>
				<td><?php echo $data['billar']; ?></td>
				<td><?php echo $data['lesti']; ?></td>
				<td><?php echo $data['1_september']; ?>
				<td><?php echo $data['pengacara']; ?></td>
				<td><?php echo $data['KUA']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>

	</center>
</body>
</html>