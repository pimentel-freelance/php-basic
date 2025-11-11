<?php 

$simpleArray = [1, 2, 3, 4, 5];

var_dump($simpleArray);

echo $simpleArray[0]; //1

$simpleArray[] = 6;
var_dump($simpleArray);

$associativeArray = [
    'name' => 'Jhon',
    'age' => 30,
    'city' => 'New York'
];

echo $associativeArray['name'];
var_dump($associativeArray);

asort($associativeArray); //sorting by value
var_dump($associativeArray);

ksort($associativeArray); //sorting by keys alphabetcally
var_dump($associativeArray);

$associativeArray['country'] = 'USA';
var_dump($associativeArray);

// Multidimentional array or matrix
$matrix = [
    [1, 2, 3],
    [4, 5, 6]
];
echo $matrix[1][1]; //5

$fruits = ['apple', 'banana', 'orange'];

var_dump(count($fruits));
asort($fruits);
var_dump($fruits);
rsort($fruits);
var_dump($fruits);

$numbers = range(1, 5);
var_dump($numbers);
$squared = array_map(
    fn($n) => $n ** 2, $numbers
);
var_dump($squared);

$evenNumbers = array_filter(
    $numbers,
    fn($n) => $n % 2 == 0
);
var_dump($evenNumbers);

$sum = array_reduce($numbers,
fn($carry, $n) => $carry + $n,
0
);
var_dump($sum);


$moreNumbers = [0, ...$numbers, 6];
var_dump($moreNumbers);

[$first, ,$second] = $fruits;
var_dump($first, $second);