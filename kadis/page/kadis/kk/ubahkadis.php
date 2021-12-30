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
                                    <fieldset disabled="disabled">
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
                                        </fieldset>
                                        <div class="form-group">
                                            <label>Verifikasi Dokumen</label>
                                            <select class="form-control" name="kadis">
                                            <option value="Pilih Status">Pilih Status Verifikasi</option>
                                            <option value="Berkas Bermasalah">Berkas Bermasalah</option>
                                            <option value="Belum Ditandatangani">Belum Ditandatangani</option>
                                            <option value="Sudah Ditandatangani">Sudah Ditandatangani</option>
                                            </select>
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
    $koneksi->query("UPDATE db_kk SET kadis='$_POST[kadis]' WHERE id='$_GET[id]'");

echo "<script>alert(' Data Penduduk Berhasil Diubah :)');</script>";
echo "<script>location='index.php?page=kadis';</script>";
    } 
    ?>
                                      





