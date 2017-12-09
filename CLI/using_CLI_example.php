<?php
  echo "Вопрос: ";
  $handle = fopen ("php://stdin","r");
  $line = fgets($handle);
  if(trim($line) != 'yes'){
      echo "Ошибочка!\n";
      exit;
  }
  echo "\n";
  echo "Закончить...\n";
?>
