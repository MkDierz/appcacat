<?php 
    $kep_kel = $_post['kep_kel'];

    if($kep_kel == ""){
        header("location:tambahkk.php?kep_kel=kosong");
    }
    else{
        echo "Nama yang anda masukan adalah <u>".$kep_kel;echo"</u>"; echo" <a href='tambahkk.php' style='text-decoration:none'>Kembali</a>";
    }
?>