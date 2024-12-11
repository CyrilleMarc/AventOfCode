<?php
$result = 0;

$file = fopen("list2.txt", "r");

function isSafeReport($levels) {
    $n = count($levels);

    for ($i = 0; $i < $n - 1; $i++) {
        $diff = abs($levels[$i + 1] - $levels[$i]);
        if ($diff < 1 || $diff > 3) {
            return false;
        }
    }

    $isIncreasing = true;
    $isDecreasing = true;
    for ($i = 0; $i < $n - 1; $i++) {
        if ($levels[$i] >= $levels[$i + 1]) {
            $isIncreasing = false;
        }
        if ($levels[$i] <= $levels[$i + 1]) {
            $isDecreasing = false;
        }
    }
    return $isIncreasing || $isDecreasing;
}

while ($reports = fgets($file)) {
    $levels = array_map('intval', explode(" ", trim($reports)));

    if (isSafeReport($levels)) {
        $result++;
    }
}
fclose($file);

echo $result . "\n";
?>
