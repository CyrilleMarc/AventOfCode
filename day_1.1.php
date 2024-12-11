<?php

$tab1 = [];
$tab2 = [];
$index = 0;
$result = 0;
$total = 0;
$file = fopen("list.txt", "r");
    while($row = fgets($file)){
        $num = explode("   ", $row);
            (int)$tab1[$index] =  $num[0];
            (int)$tab2[$index] =  $num[1];
          $index++;
            }

        sort($tab1);
        sort($tab2);
        for($i=0; $i < 1000; $i++){
            $result1 = (abs($tab1[$i]) - abs($tab2[$i]));
            $total += abs($result1);
        }
    fclose($file);
    echo $total . "\n";
?>