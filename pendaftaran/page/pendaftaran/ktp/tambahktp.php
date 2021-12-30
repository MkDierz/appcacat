                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-success">
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
                                            <input class="form-control" name="nama" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nik</label>
                                            <input class="form-control" name="nik" />
                                        </div>
                                        <div class="form-group">
                                            <label>Kampung</label>
                                            <input class="form-control" name="kamp" />
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <input class="form-control" name="kec" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input class="form-control" name="tgl_masuk" type="date" />
                                        </div>
                                         <div>
                                            <button class="btn btn-primary" name="save">Simpan</button>
                                        </div>
                                        </form>
                                        </div>
<?php 
if (isset($_POST['save']))
{
    $koneksi->query("INSERT INTO db_ktp(nama,nik,kamp,kec,tgl_masuk) VALUES ('$_POST[nama]','$_POST[nik]','$_POST[kamp]','$_POST[kec]','$_POST[tgl_masuk]')");

    echo "<script>alert('Berhasil Menambah Data Penduduk :) ');</script>";
    echo "<script>location='index.php?page=ktp';</script>";
    } 
    ?>
                  
                                      





