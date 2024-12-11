<?php

$file = fopen("list3.txt", "r");
$totalSum = 0; 

while ($reports = fgets($file)) {
    
    preg_match_all("/mul\((\d{1,3}),(\d{1,3})\)/", $reports, $matches, PREG_SET_ORDER);

    foreach ($matches as $match) {
        $num1 = intval($match[1]);
        $num2 = intval($match[2]);

        $product = $num1 * $num2;
        $totalSum += $product;

        echo "Found mul($num1,$num2): $num1 * $num2 = $product\n";
    }
}

fclose($file);

echo "Total Sum: $totalSum\n";
?>
