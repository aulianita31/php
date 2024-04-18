<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tugas php</title>
  <style>
    body   { text-align: center; font-family: "Trebuchet MS", serif; }
    h1,h2  { margin-bottom: 0; }
    hr     { width: 80%; }
    form   { margin-top: 2rem; }
    canvas { margin: 1.4rem; }
    p      { margin:0.1rem }
    .result {
      margin: 1rem auto; 
      padding: 0.25rem 0.25rem 1rem 0.25rem;
      background-color: ghostwhite;
      width: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>
<body>
  <h1>Mencari nilai Luas Segitiga</h1>
  <hr>
  <form action="" method="post">
    <div>
      Alas segitiga: <input type="text" name="alas" size="1">
      Tinggi segitiga: <input type="text" name="tinggi" size="1">
      <input type="submit" name="submit">
    </div>
  </form>
   
    <?php
      if (isset($_POST['submit'])) {
        $alas = 25;
        $tinggi = 5;
 
        echo "<div class='result'>";
        echo "<h2>Hasil Kode Program</h2>";
        echo "<span>(alas: $alas, tinggi: $tinggi)</span>";
    ?>
        <canvas id="myCanvas" width="100px" height="100px"></canvas>
        <script>
          var c = document.getElementById("myCanvas");
          var ctx = c.getContext("2d");
          ctx.beginPath();
          ctx.moveTo(100,100);
          ctx.lineTo(0,100);
          ctx.lineTo(0,0);
          ctx.closePath();
          ctx.stroke();
        </script> 
    <?php
        $sisi_miring = sqrt(($alas * $alas) + ($tinggi * $tinggi));
        $keliling_segitiga = $alas + $tinggi + $sisi_miring;
        $luas_segitiga = 1/2 * $alas * $tinggi;
 
        echo "<p>Sisi miring segitiga = ". round($sisi_miring,2) ." </p>";
        echo "<p>Keliling segitiga = ".round($keliling_segitiga,2)."</p>";
        echo "<p>Luas segitiga = ". round($luas_segitiga,2) ."</p>";
        echo "</div>";
      }
    ?>
   
</body>
</html>


<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas php|by Nita Aulia</title>
  <style>
    body   { text-align: center; font-family: "Trebuchet MS", serif; }
    h1,h2  { margin-bottom: 0; }
    hr     { width: 80%; }
    form   { margin-top: 2rem; }
    canvas { margin: 1.4rem; }
    p      { margin:0.1rem }
    .result {
      margin: 1rem auto; 
      padding: 0.25rem 0.25rem 1rem 0.25rem;
      background-color: ghostwhite;
      width: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>
<body>
  <h1>Menghitung Luas Lingkaran</h1>
  <hr>
  <form action="" method="post">
    <div>
      Jari-jari lingkaran: <input type="text" name="jari2" size="1">
      <input type="submit" name="submit">
    </div>
  </form>
   
    <?php
      if (isset($_POST['submit'])) {
        $jari2 = 25;
 
        echo "<div class='result'>";
        echo "<h2>Hasil Kode Program</h2>";
        echo "<span>(jari-jari: $jari2)</span>";
    ?>
        <canvas id="myCanvas" width="100px" height="100px"></canvas>
        <script>
          var c = document.getElementById("myCanvas");
          var ctx = c.getContext("2d");
          ctx.beginPath();
          ctx.arc(50, 50, 49, 0, 2 * Math.PI);
          ctx.stroke();
        </script> 
    <?php
       $keliling_lingkaran = 22/7 * 2 * $jari2;
       $luas_lingkaran = 22/7 * $jari2 * $jari2;
 
       echo "<p>Keliling lingkaran = ".round($keliling_lingkaran,2)."</p>";
       echo "<p>Luas lingkaran = ". round($luas_lingkaran,2) ."</p>";
 
       echo "</div>";
      }
    ?>
   
</body>
</html>
<hr>
<br>
<html>
    <head>
        <title>Menghitung Volume Tabung </title>
    </head>
    <body>
 <div class="container">
    <h1 style="text-align: center">Mencari Volume tabung</h1>
    <form method="post">
    <div style="margin-left: 25%">
    <p><b>Jari-jari: </b></p>
    <input type="text" name="jari"> <br/>
    <p><b>Tinggi: </b></p>
   <input type="text" name="tinggi"> <br/><br/>
                   
   <input type="submit" class="btn btn-primary" name="hitung" value="Hitung">
    </div>
    </form>
           
    <div style="margin-left: 25%"> <br/>
    <?php
   if(isset($_POST['hitung'])) {
   $jari = 25;
   $tinggi = 5;
   $phi = 22/7;
   $volume = $phi * $jari * $jari * $tinggi;
                           
   printf("Hasil perhitungan volume tabung adalah %.2f",$volume);
                    }
?>
</div>
</div>
</body>
</html>