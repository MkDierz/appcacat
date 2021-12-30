<?php 
$ambil = $koneksi->query("SELECT * FROM db_ktp WHERE id='$_GET[id]'");
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
                                            <label>Nik</label>
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
	$koneksi->query("UPDATE db_ktp SET nama='$_POST[nama]',nik='$_POST[nik]',kamp='$_POST[kamp]',kec='$_POST[kec]',tgl_masuk='$_POST[tgl_masuk]' WHERE id='$_GET[id]'");

echo "<script>alert(' Data Penduduk Berhasil Diubah :)');</script>";
echo "<script>location='index.php?page=ktp';</script>";
	} 
	?>
                                      





