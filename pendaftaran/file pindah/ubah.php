<?php 
$ambil = $koneksi->query("SELECT * FROM db_rekap1 WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

 ?>
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Mohon Isi Data Penduduk Dengan Benar !
                        </div>
                        <div class="panel-body">
                            <div class="row ">
                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                                    <h3>Mohon Isi Dengan Benar</h3>
                                    <form method="POST" >
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" name="nik" value="<?php echo $pecah['nik']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Kampung</label>
                                            <input class="form-control" name="kamp" value="<?php echo $pecah['kamp']; ?>" />
                                        </div>
                                        <div class="form-group style="" ">
                                            <label>Kecamatan</label>
                                            <input class="form-control" name="kec" value="<?php echo $pecah['kec']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pengambilan</label>
                                            <input class="form-control" name="tgl_pengambilan" type="date" value="<?php echo $pecah['tgl_pengambilan']; ?>" />
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Pilih Jenis Dokumen ( Harus Dipilih Ulang)</label>
                                            <select class="form-control" name="dokumen" value="<?php echo $pecah['dokumen']; ?>">
                                            <option value="Pilih">Pilih Dokumen</option>
                                            <option value="Kartu Keluarga">Kartu Keluarga</option>
                                            <option value="KTP-El">KTP-El</option>
                                            <option value="Akta Kelahiran">Akta Kelahiran</option>
                                            <option value="Akta Kematian">Akta Kematian</option> 

                                            </select>
                                        </div>
                                          <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Pilih Keterangan (Harus Dipilih Ulang)</label>
                                            <select class="form-control" name="ket" value="<?php echo $pecah['ket']; ?>">
                                            <option value="Pilih">Pilih Keterangan</option>
                                            <option value="Belum Cetak">Belum Cetak</option>
                                            <option value="Sudah Cetak">Sudah Cetak</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Pilih Keterangan Berkas ( Harus Dipilih Ulang)</label>
                                            <select class="form-control" name="verifikasi" value="<?php echo $pecah['verifikasi']; ?>">
                                            <option value="Pilih">Pilih Keterangan</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Selesai">Selesai</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Diambil Oleh</label>
                                            <input class="form-control" name="diambil" value="<?php echo $pecah['diambil']; ?>" />
                                        </div>
                                        <div>
                                        	<button class="btn btn-warning" name="save"><i class="fa fa-refresh fa-1x"></i>Update</button>
                                        </div>
                                        </form>
                                </div>
                    </div>
        </div>
</div>
</div>
<?php 
if (isset($_POST['save']))
{
	$koneksi->query("UPDATE db_rekap1 SET nama='$_POST[nama]',nik='$_POST[nik]',kamp='$_POST[kamp]',kec='$_POST[kec]',tgl_pengambilan='$_POST[tgl_pengambilan]',dokumen='$_POST[dokumen]',ket='$_POST[ket]',verifikasi='$_POST[verifikasi]',diambil='$_POST[diambil]' WHERE id='$_GET[id]'");

echo "<script>alert(' Data Penduduk Berhasil Diubah :)');</script>";
echo "<script>location='index.php?page=rekap1';</script>";
	} 
	?>
                                      





