<a href="index.php?page=tambahkk" class="btn btn-success" style="margin-bottom: 5px">Tambah Data</a>
<a href="laporan/cetak.php" target="_blank" class="btn btn-primary btn" style="margin-bottom: 5px"> <i class="fa fa-print fa-1x"></i>Print</a>
<div class="row"> 
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             <h3>Data Rekapitulasi Kartu Keluarga</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>Nama Pemohon</th>
                                            <th>NIK</th>
                                            <th>Kampung</th>
                                            <th>Kecamatan</th>
                                            <th>Nomor HP</th>
                                            <th>Kasi</th>   
                                            <th>Operator</th>                        
                                            <th>Kepala Dinas</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Pengambilan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $nomor=1; ?>

                                    <?php
                                    	$sql = $koneksi->query("select * from db_kk");
                                    	while ($data= $sql->fetch_assoc()) {

                                     ?>

                                     <tr>
                                     	<td><?php echo $nomor; ?></td>
                                     	<td><?php echo $data['kep_kel'];?></td>
                                     	<td><?php echo $data['nik'];?></td>
                                     	<td><?php echo $data['kamp'];?></td>
                                     	<td><?php echo $data['kec'];?></td>
                                        <td><?php echo $data['nomor_hp'];?></td>
                                     	<td><?php echo $data['kasi'];?></td>
                                        <td><?php echo $data['opr'];?></td>
                                     	<td><?php echo $data['kadis'];?></td>
                                        <td><?php echo $data['tgl_masuk'];?></td>
                                        <td><?php echo $data['tgl_pengambilan'];?></td>
                             			<td>
                             			<a href="index.php?page=ubahkk&id=<?php echo $data['id']; ?>" class="btn btn-primary btn" style="margin-bottom: 5px"> <i class="fa fa-edit fa-1x"></i>Ubah</a>
										<a href="index.php?page=hapuskk&id=<?php echo $data['id']; ?>" class="btn btn-danger btn"> <i class="fa fa-eraser fa-1x"></i>Hapus</a>	

										</td>     
	
                                     </tr>
                                     <?php $nomor++; ?>
                                     <?php } ?>
                                     </tbody>
