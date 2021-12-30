                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Mohon Isi Data Penduduk Dengan Benar !
                        </div>
                        <div class="panel-body">
                            <div class="row ">
                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                                    <form method="POST" >
                                        <div class="form-group">

                                        <h3> Masukkan Data Penduduk </h3>

                                        <div class="form-group">
                                            <label>Nama Kepala Keluarga</label>
                                            <input class="form-control" name="kep_kel" />
                                        </div>
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" name="nik" />
                                        </div>
                                        <div class="form-group">
                                            <label>Kampung</label>
                                            <input class="form-control" name="kamp" />
                                        </div>
                                        <div class="form-group style="" ">
                                            <label>Kecamatan</label>
                                            <input class="form-control" name="kec" />
                                        </div>
                                        <div class="form-group style="" ">
                                            <label>Nomor HP</label>
                                            <input class="form-control" name="nomor_hp" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input class="form-control" name="tgl_masuk" type="date" />
                                        </div>
                                         <div>
                                            <button class="btn btn-primary" name="save">Simpan</button>
                                        </div>
                                        </div>

<?php
if (isset($_POST['save']))
{
    $koneksi->query("INSERT INTO db_kk(kep_kel,nik,kamp,kec,opr,kasi,kadis,tgl_masuk,nomor_hp) VALUES ('$_POST[kep_kel]','$_POST[nik]','$_POST[kamp]','$_POST[kec]','$_POST[opr]','$_POST[kasi]','$_POST[kadis]','$_POST[tgl_masuk]','$_POST[nomor_hp]')");

    echo "<script>alert('Berhasil Menambah Data Penduduk :) ');</script>";
    echo "<script>location='index.php?page=kk';</script>";
    } 
?>
                  
                                      





