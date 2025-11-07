<?php 

$greet = function ($name) {
    return "Hello, $name";
};

echo $greet("Anthony\n");


$numbers = [1, 2, 3];
$squared = array_map(function ($n){
        return $n * $n;
}, $numbers);

var_dump($numbers, $squared);


// use &
$message = "I love";
$feeling = function ($name) use (&$message) {
    $message = $message . "...!";
    return "$message $name\n";
};

echo $feeling("you");
echo $message . "\n";
