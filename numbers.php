<?php 

$int = 42;
$floar = 3.14;
$stringToInt = (int)"100";
$floatToInt = (int)3.00;

var_dump($int, $floar, $stringToInt, $floatToInt);
var_dump(
    round(3.7),
    round(3.5),
    round(3.4),
    floor(3.7),
    ceil(3.1),
    min(2, 3, 1, 7),
    max(2, 3, 1, 7,),
    rand(1, 10)
);

$number = 1234.89;
echo "Formatted: " . number_format($number, 2, ".", "," );
