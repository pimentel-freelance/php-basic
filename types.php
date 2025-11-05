<?php

$isStudent = 0;
var_dump($isStudent, true, $isStudent == true);

$scores = [85, "90", (int)"70", 95.5];
$total = $scores[0] + $scores[1] + $scores[2] + $scores[2];
var_dump($scores, $total);

echo "Total score is: " . $total . "\n";
echo "Total score is: $total \n";