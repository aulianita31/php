<?php

$nilai = 85;

echo "Nilai: {$nilai} <br>";

   echo "Predikat: E";
if ($nilai >= 85 and $nilai <= 100) {
    echo "Predikat: A";
} elseif ($nilai >= 75) {
    echo "Predikat: B";
} elseif ($nilai >= 60) {
    echo "Predikat: C";
} elseif ($nilai >= 50) {
    echo "Predikat: D";
} elseif ($nilai >= 0) {
}  else {
    echo "Nilai tidak valid";
}
if ($nilai >=60 and $nilai <= 100) {
    echo "<br><b>Selamat, Anda lulus</b>";
} elseif ($nilai >=50 and $nilai <60) {
    echo "<br><b>Anda Her</b>";
} else{
    echo "<br><b>Maaf, Anda tidak lulus</b>";
}
?>