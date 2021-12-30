<?php 
$ambil = $koneksi->query("SELECT * FROM db_kk WHERE id='$_GET[id]'");
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
                                            <label>Kepala Keluarga</label>
                                            <input class="form-control" name="kep_kel" value="<?php echo $pecah['kep_kel']; ?>" />
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
                                        <div class="form-group style="" ">
                                            <label>Nomor HP</label>
                                            <input class="form-control" name="nomor_hp" value="<?php echo $pecah['nomor_hp']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input class="form-control" name="tgl_masuk" type="date" value="<?php echo $pecah['tgl_masuk']; ?>" />
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
	$koneksi->query("UPDATE db_kk SET kep_kel='$_POST[kep_kel]',nik='$_POST[nik]',kamp='$_POST[kamp]',kec='$_POST[kec]',tgl_masuk='$_POST[tgl_masuk]',nomor_hp='$_POST[nomor_hp]' WHERE id='$_GET[id]'");

echo "<script>alert(' Data Penduduk Berhasil Diubah :)');</script>";
echo "<script>location='index.php?page=kk';</script>";
	} 
	?>
                                      





