<!DOCTYPE html>
<head><title>Belajar PHP|by Nita Aulia</title></head>
</html>
<?php
  $nama="Nita Aulia";
  echo "Halo perkenalkan nama saya $nama<br>";
  echo "<h2>Tipe Data Integer</h2>";
  echo "penjumlahan dan pengurangan<br>";
  $bill1=7;
  $bill2=9;
  $hasil1=$bill1+$bill2;
  $hasil2=$bill2+$bill1;
  echo "penjumlahan dari $bill1+$bill2 adalah = $hasil1<br>";
  echo "pengurangan dari $bill1-$bill2 adalah = $hasil1<br>";
  echo "<h3>Nilai Ulangan Harian siswa</h3>";
  $nilai1 =9.5;
  $nilai2 =8;
  $nilai3 =7.5;
  $rata2 = ($nilai1+$nilai2+$nilai3) /3;
  echo "Nilai Ulangan Harian Matematika anda adalah : $nilai1<br>";
  echo "Nilai Ulangan Harian Bahasa Indonesia anda adalah : $nilai2<br>";
  echo "Nilai Ulangan Harian Biologi anda adalah : $nilai3<br>";
  echo "Nilai Rata-Rata Ulangan Harian anda adalah&nbsp;: $rata2<br>";

  echo "<h2>Tipe Data Boolean</h2>";
  $siswalulus= true;
  $siswaujian= false;
//var dump menampilkan tipe data
  var_dump($siswalulus);
  echo "<br>";
  var_dump($siswaujian);

  echo "<h2>Tipe Data Array</h2>";
  $listsiswa = ["Agung","Agus","Bayu","Budi","Rama","Rahmat" ];
  //pembagian 1 kelompok : 2 orang
  echo $listsiswa[0];
  echo " berkelompok dengan $listsiswa[5]<br>";
  echo $listsiswa[1];
  echo " berkelompok dengan $listsiswa[2]<br>";
  echo $listsiswa[4];
  echo " berkelompok dengan $listsiswa[3]<br>";
?>