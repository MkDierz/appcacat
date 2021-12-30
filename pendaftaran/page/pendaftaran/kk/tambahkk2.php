<?php
    // Membuat variabel kosong
    $kep_kel="";
    $kep_kelErr="";
    
    // Cek form sudah di klik submit/belum
    if(isset($_POST['submit'])){
        $kep_kel = trim($_POST['kep_kel']);
        
        // Cek input kosong

        if(empty($kep_kel)){
            $kep_kelErr = "Kepala Keluarga masih kosong.<br>";
        }        
        // Cek semua input sudah diisi apa belum
        if(!empty($kep_kel) ){
            echo "Selamat semua input sudah diisi.<br>";
        }
    }
?>
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
                                            <label>Persyaratan Pendaftaran Kartu Keluarga</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="" />Surat Pengantar Dari datok Penghulu
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name=""/>Surat Domisili dari Datok Penghulu mengetahui Camat
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name=""/>Pemohon membawa Formulir (F1.01) yang telah ditandatangani oleh Datok Penghulu
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name=""/>Foto Copy Ijazah
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name=""/> Foto copy Akta Kelahiran 
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name=""/> Fotocopy buku nikah (bagi yang terikat pernikahan) 
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name=""/> Surat Dokter untuk Golongan Darah 
                                                </label>
                                            </div>
                                        </div>

                                        <h3> Masukkan Data Penduduk </h3>
                                         <br>
                                         <h3>From Register</h3>
 

                                        <div class="form-group">
                                         <form action="validasi-kosong.php" method="post">
                                         <label>Nama Kepala Keluarga</label>
                                         <input class="form-control" name="kep_kel" value="<?php echo $kep_kel; ?>"><br>
                                         <?php echo $kep_kelErr; ?>
                                         <input type="submit" name="submit" value="Register">
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
                                        </form>
                                        </div>
<?php
if (isset($_POST['save']))
{
    $koneksi->query("INSERT INTO db_kk(kep_kel,nik,kamp,kec,opr,kasi,kadis,tgl_masuk,nomor_hp) VALUES ('$_POST[kep_kel]','$_POST[nik]','$_POST[kamp]','$_POST[kec]','$_POST[opr]','$_POST[kasi]','$_POST[kadis]','$_POST[tgl_masuk]','$_POST[nomor_hp]')");

    echo "<script>alert('Berhasil Menambah Data Penduduk :) ');</script>";
    echo "<script>location='index.php?page=kk';</script>";
    } 
?>
                  
                                      





