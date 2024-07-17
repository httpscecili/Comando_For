<?php

echo "Digite uma sequência de números inteiros separados por espaços: ";
$numeros = explode(' ', readline());

$maiorNumero = null;

foreach ($numeros as $numero) {
  $numero = intval($numero);

  if ($maiorNumero === null || $numero > $maiorNumero) {
    $maiorNumero = $numero;
  }
}

if ($maiorNumero === null) {
  echo "Nenhum número válido foi digitado.\n";
} else {
  echo "O maior número da sequência é: $maiorNumero\n";
}

?>
