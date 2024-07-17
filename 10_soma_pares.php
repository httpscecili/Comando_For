<?php

$soma = 0;

for ($numero = 1; $numero <= 100; $numero++) {
  if ($numero % 2 == 0) {
    $soma += $numero;
  }
}

echo "Soma dos números pares entre 1 e 100: $soma\n";

?>
