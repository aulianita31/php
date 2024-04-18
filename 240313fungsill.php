<?php
function luasLingkaran($r) {
    $pi = 3.14;
    echo "Diketahi nilai r = $r<br>";
    echo "Luas Lingkaran = pi * r * r<br> $r<br>";
    echo "Luas Lingkaran = $pi * $r * $r<br>";
    echo "Luas Lingkaran = " . $pi*$r*$r;
}

//Buatkan Fungsi Luas Segitiga
function luasSegitiga(int $a=null,int $t=null) {
if (!$a && !$t) {
    $a=$t=25;
}
    echo "Diketahui Nilai alas = $a<br>";
    echo "Diketahui Nilai Tinggi = $t<br>";
    echo "Luas Segitiga = 1/2 * alas * tinggi<br>";
    echo "Luas lingkaran = 0.5 * $a * $t<br>";
    echo "Luas Lingkaran = . 0.5*$a*$t";
}