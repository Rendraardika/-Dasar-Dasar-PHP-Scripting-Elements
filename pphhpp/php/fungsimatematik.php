<?php
$nilai = 21.3451;

echo("Nilai Absolut = " . abs($nilai) . "<br>");
echo("Pembulatan ke atas = " . ceil($nilai) . "<br>");
echo("Pembulatan ke bawah = " . floor($nilai) . "<br>");
echo("Pembulatan biasa = " . round($nilai) . "<br>");
echo("Nilai Pi = " . pi() . "<br>");

$bilangan = 2;
echo("Pangkat 2 = " . pow($bilangan, 2) . "<br>");
echo("Pangkat 3 = " . pow($bilangan, 3) . "<br>");
echo("Random 0-100 = " . rand(0, 100));
?>
