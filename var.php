<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar|by Nita Aulia</title>
    <link rel="shortcut icon" href="../html5/images/logo.png" type="image x-icon">
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Nita Aulia";
    echo "<br>";
    print " Teknik Komputer dan Jaringan";
    // variabel adalah simbol untuk menyimpan nilai
    echo "<h1>variabel</h1>";
    $nm = "Rumah Gemilang Imdonesia";
    echo "Saya belajar di $nm";
    echo "<hr>";

    $a = 15;
    $b = 2;
    echo "$a + $b = " . ($a+$b); 
    echo "<br>";
    echo "$a : $b = " . ($a/$b) . "<br>"; 
    echo "$a % $b = " . ($a%$b) . "<br>"; 
    echo "$a x $b = " . ($a*$b) . "<br>";
    echo "$a - $b = " . ($a-$b) . "<br>";  
    ?>
</body>
</html>