<?php
$i = 0; 
$j = 0;
$charCount = 0;
$count = 0;
$file = fopen("list4.txt", "r");


for ($i = 0; $i < 140; $i++) {
    for ($j = 0; $j < 140; $j++) { 
        $tab[$i][$j] = trim(fgetc($file));
        $charCount++;
    }
}


fseek($file, 0);
echo $charCount . "\n";

for ($i = 0; $i < 140; $i++) {
    for ($j = 0; $j < 140; $j++) { 
       if (isset($tab[$i][$j], $tab[$i][$j + 1], 
        $tab[$i][$j + 2], $tab[$i][$j + 3]) && 
        $tab[$i][$j] == 'X' && 
        $tab[$i][$j + 1] == 'M' && 
        $tab[$i][$j + 2] == 'A' && 
        $tab[$i][$j + 3] == 'S')
        {
            $count++;
        }
        if (isset($tab[$i][$j], $tab[$i][$j + 1], 
        $tab[$i][$j + 2], $tab[$i][$j + 3]) && 
        $tab[$i][$j] == 'S' && 
        $tab[$i][$j + 1] == 'A' && 
        $tab[$i][$j + 2] == 'M' && 
        $tab[$i][$j + 3] == 'X')
        {
            $count++;
        }
        
        if (isset($tab[$i][$j], $tab[$i + 1][$j], 
        $tab[$i + 2][$j], $tab[$i + 3][$j]) && 
        $tab[$i][$j] == 'X' && 
        $tab[$i + 1][$j] == 'M' && 
        $tab[$i + 2][$j] == 'A' && 
        $tab[$i + 3][$j] == 'S')
        {
            $count++;
        }
        if (isset($tab[$i][$j], $tab[$i + 1][$j], 
        $tab[$i + 2][$j], $tab[$i + 3][$j]) && 
        $tab[$i][$j] == 'S' && 
        $tab[$i + 1][$j] == 'A' && 
        $tab[$i + 2][$j] == 'M' && 
        $tab[$i + 3][$j] == 'X')
        {
            $count++;
        }
        if (isset($tab[$i][$j], $tab[$i + 1][$j + 1], 
        $tab[$i + 2][$j + 2], $tab[$i + 3][$j + 3]) && 
        $tab[$i][$j] == 'S' && 
        $tab[$i + 1][$j + 1] == 'A' && 
        $tab[$i + 2][$j + 1] == 'M' && 
        $tab[$i + 3][$j + 1] == 'X')
        {
            $count++;
        }
        if (isset($tab[$i][$j], $tab[$i + 1][$j + 1], 
        $tab[$i + 2][$j + 2], $tab[$i + 3][$j + 3]) && 
        $tab[$i][$j] == 'X' && 
        $tab[$i + 1][$j + 1] == 'M' && 
        $tab[$i + 2][$j + 1] == 'A' && 
        $tab[$i + 3][$j + 1] == 'S')
        {
            $count++;
        }
        if (isset($tab[$i][$j], $tab[$i - 1][$j - 1], 
        $tab[$i-2][$j - 2], $tab[$i - 3][$j - 3]) && 
        $tab[$i][$j] == 'S' && 
        $tab[$i - 1][$j - 1] == 'A' && 
        $tab[$i - 2][$j - 1] == 'M' && 
        $tab[$i - 3][$j - 1] == 'X')
        {
            $count++;
        }
        if (isset($tab[$i][$j], $tab[$i - 1][$j - 1], 
        $tab[$i - 2][$j - 2], $tab[$i - 3][$j - 3]) && 
        $tab[$i][$j] == 'X' && 
        $tab[$i - 1][$j - 1] == 'M' && 
        $tab[$i - 2][$j - 1] == 'A' && 
        $tab[$i - 3][$j - 1] == 'S')
        {
            $count++;
        }
    }
}
    echo $count . "\n";
        
    fclose($file);
    
  //469
   
?>
