<?php

$tab1 = [];
$tab2 = [];
$index = 0;
$result = 0;
$total = 0;
$compil = 0;
$file = fopen("list.txt", "r");
    while($row = fgets($file)){
        $num = explode("   ", $row);
            (int)$tab1[$index] =  $num[0];
            (int)$tab2[$index] =  $num[1];
          $index++;
            }
        for($i=0; $i < 999; $i++){
            $compil = 0;
            for($j=0; $j < 999; $j++){
                if($tab1[$i] == $tab2[$j]){
                    $compil++;
                }
            }
            $result = $tab1[$i] * $compil;
            $total += $result; 
            $result = 0;
    }
    fclose($file);
    echo $total . "\n";

    


?>