<?php
echo "<h2>Bilangan Fibonacci |by Nita Aulia</h2>";
//by Nita Aulia
function fibonacci(int $jumlahBilangan) {
  $fibonacci = [];
  for ($i=0; $i < $jumlahBilangan ; $i++) { 
    if ($i<2) {
        $bilangan = $i;
    } else {
       $bilangan = $fibonacci[$i-1] + $fibonacci[$i - 2];
    }
    array_push($fibonacci, $bilangan);
  }
return $fibonacci;
}

echo implode(" ", fibonacci(20)) . "<br>";
