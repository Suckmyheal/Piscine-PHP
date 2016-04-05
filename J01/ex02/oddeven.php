#!/usr/bin/php
<?php

print("Entrez un nombre: ");
  while(!feof(STDIN)) {
    $line = fgets(STDIN);

    if($line === FALSE) {
      if(feof(STDIN)) {
        break;
      }
      continue;
    }
    $trimmed = rtrim($line, "\n");
    if (is_numeric($trimmed) == FALSE)
    	print("'".$trimmed."'"." n'est pas un chiffre\nEntrez un nombre: ");
    else if ($trimmed % 2 == 0)
    	print("Le chiffre ".$trimmed." est Pair\nEntrez un nombre: ");
    else
    	print("Le chiffre ".$trimmed." est Impair\nEntrez un nombre: ");
  
  }
  print("\n");
?>