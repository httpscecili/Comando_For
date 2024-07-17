<?php

// Definindo o limite superior
$limiteSuperior = 100;

// Iterando de 0 até o limite superior
for ($i = 0; $i <= $limiteSuperior; $i++) {
  // Verificando se o número é par
  if ($i % 2 == 0) {
    // Exibindo o número par
    echo $i . " ";
  }
}

?>
