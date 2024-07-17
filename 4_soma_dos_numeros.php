<?php

echo "Digite um número inteiro positivo: ";
$numeroLimite = intval(readline());

if ($numeroLimite <= 0) {
  echo "Número inválido. Digite um número inteiro positivo.\n";
  exit;
}

$soma = 0;

for ($i = 1; $i <= $numeroLimite; $i++) {
  $soma += $i;
}

echo "A soma dos números entre 1 e $numeroLimite é: $soma\n";

?>
