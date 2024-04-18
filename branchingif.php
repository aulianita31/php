<?php
$hari = "cerah";
if ($hari == "cerah") {
    echo "Selamat siang, Hari yang cerah";
} else {
    echo "Duh hari ini hujan";
}
echo "<hr>";

$nilai = 60;
if ($nilai >= 60) {
   echo "Selamat Anda Lulus"; 
} else{
    echo "Maaf, Anda tidak lulus" . "<br>";
}
echo  "<h2>Penjelasan Nilai - Nilai Terkecil</h2>";
$nilai = 85;
if ($nilai >= 85 AND $nilai <= 100) {
    echo " Nilai anda $nilai Predikat: A";
} elseif ($nilai >=70 AND $nilai <=79) {
    echo "Nilai anda $nilai Predikat: B";
} elseif ($nilai >=60 AND $nilai <=69 ) {
    echo "Nilai anda $nilai Predikat: C";
} elseif ($nilai >=50 AND $nilai <=59) {
    echo "Nilai anda $nilai Predikat: D";
} elseif ($nilai >=49 AND $nilai <=0) {
}  else {
    echo "Nilai tidak valid";
} 
echo "<hr>";

echo  "<h2>Penjelasan Nilai - Nilai Terbesar</h2>";
$nilai = 56;
if ($nilai >= 85 and $nilai <= 100) {
    echo " Nilai anda $nilai Predikat: A";
} elseif ($nilai >=70 and $nilai <79) {
    echo "Nilai anda $nilai Predikat: B";
} elseif ($nilai >=60 and $nilai <69 ) {
    echo "Nilai anda $nilai Predikat: C";
} elseif ($nilai >=50 and $nilai <59) {
    echo "Nilai anda $nilai Predikat: D";
} elseif ($nilai >=0 and $nilai <49) {
}  else {
    echo "Nilai tidak valid";
} 
echo "<hr>";