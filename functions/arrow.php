<?php 

$numbers = [1, 2, 3, 4, 5];
$multiplier = 3;



$squared = array_map(function ($n) use ($multiplier) {
    return $n * $multiplier;
}, $numbers);

// Arrow function need to declare the variable as global or use sintax
$squaredTwo = array_map(
    fn ($n) => $n * $multiplier,
    $numbers);

var_dump($numbers, $squared, $squaredTwo);