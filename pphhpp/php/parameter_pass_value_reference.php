<?php
$nama = "Masukkan Nama Anda";

function bkn_reference($nama) {
    $nama .= " Memang Tidak Gaul";
    echo("<br>" . $nama);
}
bkn_reference($nama);
echo("<br>Kata Tidak Gaul Hilang ==> " . $nama);

function reference(&$nama) {
    $nama .= " Memang Paling Gaul";
    echo("<br><br>" . $nama);
}
reference($nama);
echo("<br>Kata Tidak Gaul Masih ==> " . $nama);
?>
