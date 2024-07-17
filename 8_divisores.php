<?php

echo "Digite um número inteiro positivo: ";
$numero = intval(readline());

if ($numero <= 0) {
  echo "Número inválido. Digite um número inteiro positivo.\n";
  exit;
}

echo "Divisores de $numero:\n";

for ($i = 1; $i <= $numero; $i++) {
  if ($numero % $i == 0) {
    echo "$i ";
  }
}

echo "\n";

?>
