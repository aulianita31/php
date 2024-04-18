<?php
$santri = [ "Rizqi", "Faiq", "Khatami", "Thariq", "Rif'at", 'Daris', "Lutfi", "Nuris", "Nita", "Santi", "Rizki", "Muhidin"];
echo $santri[0]. " ";
echo $santri[1]. " ";
echo $santri[2]. " ";
echo $santri[3]. " ";
echo $santri[4]. " ";
echo $santri[5]. " ";
echo $santri[6]. "<br>";


for ($i=0; $i < 7; $i++) { 
    echo $santri[$i]. " ";
}
echo "<hr>";
foreach ($santri as $value) {
    echo $value. " ";
}