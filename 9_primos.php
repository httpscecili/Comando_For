<?php

for ($numero = 2; $numero <= 100; $numero++) {
  $ehPrimo = true;

  for ($i = 2; $i <= $numero / 2; $i++) {
    if ($numero % $i == 0) {
      $ehPrimo = false;
      break;
    }
  }

  if ($ehPrimo) {
    echo "$numero ";
  }
}

echo "\n";

?>
