<?php 

//Simple expression
echo "Hello world\n";

//Variable
$name = "Anthony";
echo "Hello, " . $name . "\n";

//Arithmetic
$pizzas = 3;
$slicesPizza = 8;
$TotalSlices = $pizzas * $slicesPizza;
echo "Total pizza slices: " . $TotalSlices . "\n";

//Bool
$isHungry = false;
echo "Hungry? ";
echo $isHungry ? "Yes" : "No";
echo "\n";