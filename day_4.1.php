<?php
$tab = [];
$file = fopen("list4.txt", "r");

if ($file) {
    for ($i = 0; $i < 140; $i++) {
        for ($j = 0; $j < 140; $j++) {
            $char = fgetc($file);
            if ($char === false) { 
                break 2; 
            }
            $tab[$i][$j] = $char; 
        }
    }
    fclose($file);
} else {
    echo "Erreur : Impossible d'ouvrir le fichier.";
}
    echo $tab[11][10];
  
?>
