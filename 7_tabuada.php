<?php

for ($numero = 5; $numero <= 10; $numero++) {
  echo "Tabuada do $numero:\n";

  for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "\n";
  }

  echo "\n";
}

?>
