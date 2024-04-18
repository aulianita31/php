<?php
//for
// $i=$i+1 == $i+1 == $i++
for ($i=1; $i < 100; $i+=10) :
    echo "$i.kelas TKJ A-30<br>";
endfor;

echo "<hr>";
// WHILE
$a = 10;
while ($a > 0) {
    echo "$a.Belajar While<br>";
    $a--; 
}

// DO WHILE
echo "<h1> Do While</h1>";
$b = 1;
do {
    echo "$b.Belajar Do While<br>";
    $b+=3;
} while ($b <= 10);

// buat perulangan 
// dari 500 sampai 0 dengan jarak 100
// gunakan for

echo "<hr>";
echo "<h3>Tugas For</h3>";
$a="Nita";
for ($i=500; $i > 0 ; $i-=100) { 
    echo "$i.$a Belajar For Do While<br>";
}
echo "<hr>";
echo "<h2>For</h2>";
for ($i=1; $i <= 100; $i++) { 
    if ($i === 4) {
        $i++;
        continue;
    }
    if ($i === 10) {}
       break;
}