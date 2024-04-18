<?php 
echo "<h2>Penjelasan Nilai</h2>";
$nilai ="a";
if (strtoupper($nilai) =="A"){
    echo " Nilai anda $nilai Predikat: <b>Istimewa</b>";
} elseif (strtoupper($nilai) =="B" ) {
    echo "Nilai anda $nilai Predikat: <b>Baik</b>";
} elseif (strtoupper($nilai) =="C" ) {
    echo "Nilai anda $nilai Predikat: <b>Cukup</b>";
} elseif (strtoupper($nilai) =="D") {
    echo "Nilai anda $nilai Predikat: <b>Kurang</b>";
} elseif (strtoupper($nilai) =="E") {
    echo "Nilai anda $nilai Predikat: <b>Sangat Kurang</b>";
}  else {
    echo "Nilai Anda $nilai, <b> tidak ada predikat dengan huruf seperti itu</b>";
} 
echo "<hr>";

//ternary if
$gender="L";
echo (strtoupper($gender)=='L') ? "Laki-laki" : "Perempuan" ;