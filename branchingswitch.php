<?php
$hari = "cerah";
switch (strtoupper($hari)) {
    case 'HUJAN':
        echo "Karna hari ini $hari, maka saya istirahat di rumah saja";
        break;
    case 'CERAH':
         echo "Karna hari ini $hari, maka saya berangkat kerja";
         break;
    
    default:
        echo "tidak ada acuan untuk $hari";
        break;
}

echo "<hr>";

$nilai ="d";
switch (strtoupper($nilai)) {
    case 'A':
        echo " Nilai anda $nilai Predikat: <b>Istimewa</b>";
        break;
    case 'B':
         echo " Nilai anda $nilai Predikat: <b>Baik</b>";
        break;
    case 'C':
         echo " Nilai anda $nilai Predikat: <b>Cukup</b>";
        break;
    case 'D':
         echo " Nilai anda $nilai Predikat: <b>Kurang</b>";
        break;
    case 'E':
        echo " Nilai anda $nilai Predikat: <b>Sangat Kurang</b>";
        break;
    default:
        echo "tidak ada acuan untuk nilai <b>$nilai</b>";
        break;
}
echo "<hr>";