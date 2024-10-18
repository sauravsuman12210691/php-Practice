<?php
function findMissingNumber($array, $n) {
    sort($array);
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] != $i + 1) {
            return $i + 1;
        }
    }
    return $n;
}

$array = [1, 2, 3, 5, 6];
$n = 6;

$missing_number = findMissingNumber($array, $n);
echo "The missing number is: " . $missing_number;
?>
