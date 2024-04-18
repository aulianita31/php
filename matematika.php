<?php
echo "<h2>Matematika</h2>";
echo "<h3>Niali Absolut - abs()</h3>";
$a = 10;
$b = 33;
$selisih = abs($a - $b);  //23
echo "se;isih: {$selisih}";

echo "<h3>Nilai PI - pi()</h3>";
echo "Nilai pi = " . pi();

echo "<h3>Pangkat - pow()</h3>";
echo "2<sup>2</sup> = " . pow(2, 2) . "<br>"; #4
echo "2 pangkat 3 = " . pow(2, 3) . "<br>"; #8
echo "5 pangkat 3 = " . pow(5, 3) . "<br>"; #125
echo "3 pangkat 5 = " . pow(3, 5) . "<br>"; #243

echo "<h3>Akar - sqrt</h3>";

echo "Akar 0 = " . sqrt(0) . "<br>";
echo "Akar 1 = " . sqrt(1) . "<br>";
echo "Akar 4 = " . sqrt(4) . "<br>";
echo "&radic;9 = " . sqrt(9) . "<br>";

echo "<h3>Angka Acak - rand()</h3>";
echo rand() . '<br>';
echo rand(0, 10) . '<br>'; # kemungkinan angka yang muncul adalah 0-10

echo "<h3>Degree to Radian - deg2rad()</h3>";
echo deg2rad(120) . '<br>';
echo deg2rad(30) . '<br>';
echo deg2rad(225) . '<br>';

echo "<h3>pembulatan - round()</h3>";
echo round(4.6789) . "<br>";
echo round(4.3234) . "<br>";
echo round(pi(), 2) . "<br>"; # kita bulatkan nilai pi
echo round(pi(), 4) . "<br>";

echo "<h3>pembulatan kebawah - floor()</h3>";
echo floor(3.9999) . '<br>';
echo floor(3.33) . '<br>';
 
echo "<h3>pembulatan keatas - ceil()</h3>";
echo ceil(3.9999) . '<br>';
echo ceil(3.33) . '<br>';
