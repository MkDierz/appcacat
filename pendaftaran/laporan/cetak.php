<?php 
session_start();
$koneksi = new mysqli("localhost","root","","capil2");
 ?>
<!DOCTYPE html>
<html>
<title>Rekap Data</title>
<body>
<center><h1>Data Rekapitulasi Kartu Keluarga</h1></center>
<p>
Nama Operator : 
<p>
<link href="table-style.css" rel="stylesheet" />
<body>
        <center>
        <br><br>
        <form method="get">
            <label>PILIH TANGGAL</label>
            <input type="date" name="tgl_masuk">
            <input type="submit" value="FILTER">
        </form>

        <br/> <br/>

        <table cellspacing='0'>

            <tr>
                 <tr>
                <th>NO.</th>
                <th>Kepala Keluarga</th>
                <th>NIK</th>
                <th>Kampung</th>
                <th>Kecamatan</th>
                <th>Nomor HP</th>
                <th>Tanggal Masuk</th>
                 </tr>
            <?php 
            $no = 1;

            if(isset($_GET['tgl_masuk'])){
                $tgl = $_GET['tgl_masuk'];
                $sql = mysqli_query($koneksi,"select * from db_kk where tgl_masuk='$tgl'");
            }else{
                $sql = mysqli_query($koneksi,"select * from db_kk");
            }
            
            while($data = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['kep_kel'];?></td>
                <td><?php echo $data['nik'];?></td>
                <td><?php echo $data['kamp'];?></td>
                <td><?php echo $data['kec'];?></td>
                <td><?php echo $data['nomor_hp'];?></td>    
                <td><?php echo $data['tgl_masuk']?></td>
            </tr>
            <?php 
            }
            ?>
        </table>

    </center>
</body>
</html>