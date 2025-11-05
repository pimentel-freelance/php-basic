<?php 
echo "Welcome to php\n";

$name = "Anthony";
echo "Hello, " . $name . "\n";

$pizzas = 3;
$slicesPizza = 8;
$TotalSlices = $pizzas * $slicesPizza;
echo "Total pizza slices: " . $TotalSlices . "\n";

$isHungry = false;
echo "Hungry? ";
echo $isHungry ? "Yes" : "No";
echo "\n";