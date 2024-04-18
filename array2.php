<?php
$siswa = array(
  'tb'=>'<b>Fitri</b>',
  'fv'=>'<b>Lintang</b>',
  'dg'=>'<b>Wami</b>',
  'tkj'=>"<b>Rif'at</b>",
  'ap'=>'<b>Inriani</b>',
  'tsm'=>'<b>Mukkadas</b>'
);
array_push($siswa, "Nita");
echo $siswa['tsm'];
echo "<hr>";
print_r($siswa);

echo "<h2>Array Multidimensi</h2>";
$histogram = [
    [1, 2, 3, 4, 5],
    [6, 7, 3, 9, 2],
    [3, 5, 1, 0, 5],
    [5, 8, 1, 3, 1],
];
echo $histogram[1][3];
echo "<hr>";
foreach ($histogram as $h) {
  foreach ($h as $value) {
    echo $value. "<br>";
  }
}
print_r($histogram);