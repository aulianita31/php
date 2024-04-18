<?php
    for($x=1; $x <=10;  $x++) { 
        echo "pengulangan kata menggunakan for<br>";
    }
     for ($x2=10; $x2>0; $x2--) { 
        echo "Perhitungan mundur ke $x2 menggunakan for<br>";
     }
echo "<br>";
$listsiswa = ['Agus','Rama','Agung'];
for ($n=0; $n < count($listsiswa); $n++) { 
    echo "List siswa : {$listsiswa[$n]} <br>";
}
echo "<br>";
$namasiswa = ['Sultan','Rian','Aldy'];
foreach ($namasiswa as $key => $siswa) {
    echo "[{$key}] Nama siswa : {$siswa} <br>";
}
//pengulangan while
echo "<h3>while</h3>";
$while = 1;
while ($while <= 10) {
    echo "perulangan ke- {$while} <br>";
    $while++;
}
//pengulangan do while
echo "<h3>Do While</h3>";
$do = 10;
do {
    echo "$do <br>";
    $do++;
} while ($do >= 1);
?>