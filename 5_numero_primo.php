<?php

echo "Digite um número inteiro: ";
$numero = intval(readline());

if ($numero <= 0) {
  echo "Número inválido. Digite um número inteiro maior que zero.\n";
  exit;
}

$ehPrimo = true;

for ($i = 2; $i <= $numero / 2; $i++) {
  if ($numero % $i == 0) {
    $ehPrimo = false;
    break;
  }
}

if ($ehPrimo) {
  echo "$numero é um número primo.\n";
} else {
  echo "$numero não é um número primo.\n";
}

?>
