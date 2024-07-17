<?php

function solicitarNumeroPositivo() {
  echo "Digite um número inteiro positivo: ";
  $entrada = readline();

  $entrada = trim($entrada);

  if (!is_numeric($entrada) || $entrada <= 0) {
    echo "Número inválido. Digite um número inteiro positivo.\n";
    return null;
  }

  return intval($entrada);
}

$numeroLimite = solicitarNumeroPositivo();

if ($numeroLimite === null) {
  exit;
}

for ($i = 0; $i <= $numeroLimite; $i++) {
  if ($i % 2 == 0) {
    echo $i . " ";
  }
}

?>
