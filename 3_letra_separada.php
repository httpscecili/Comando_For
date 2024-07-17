<?php

echo "Digite uma palavra: ";
$palavra = readline();

if ($palavra === "") {
  echo "Nenhuma palavra digitada.\n";
  exit;
}

$letras = str_split($palavra);

foreach ($letras as $letra) {
  echo $letra . "\n";
}

?>
