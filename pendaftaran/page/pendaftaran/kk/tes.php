<?php 
session_start();
$koneksi = new mysqli("localhost","root","","capil2");

  ?>
  <div class="row"> 
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <center><h3>Data Rekapitulasi Kartu Keluarga</h3></center>
                             
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>Kepala Keluarga</th>
                                            <th>NIK</th>
                                            <th>Kampung</th>
                                            <th>Kecamatan</th>
                                            <th>Nomor HP</th>
                                            <th>Tanggal Masuk</th>
                                        </tr>
                                        Nama Operator : 
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
                                        <td><?php echo $data['tgl_masuk']?></td>
                                     </tr>
                                     <?php $nomor++; ?>
                                     <?php } ?>
                                     </tbody>
