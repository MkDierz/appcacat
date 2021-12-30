                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Mohon Isi Data Penduduk Dengan Benar !
                        </div>
                         <div class="panel-body">
                            <div class="row ">
                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
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
                                   <form method="POST" action="index.php?page=tambahkk">
                                    <label>
                                     <input type="checkbox" name="checkbox" value="check"  /> Persyaratan lengkap
                                    </label><br>
                                     <input type="submit" name="syarat" value="Next" onclick="if(!this.form.checkbox.checked){alert('Semua Persyaratan Harus Terpenuhi');return false}"  />
                                    </form>

<?php

if(empty($_POST['agree']) || $_POST['agree'] != 'agree') {
    echo 'Klik "Next" Jika Semua Persyaratan di penuhi';
}

 ?> 
