<?php 

declare(strict_types=1);

function processInput(int|float|string $input) {
    return match(true){
        is_int($input) => "Integer: " . ($input * 2),
        is_float($input) => "Float: " . round($input, 2),
        is_string($input) => "String: " . strtoupper($input),
        default => "Unknown type"
    };
}

$inputs =[
    40,
    3.1416,
    "hello",
    7,
    2.5,
    "world"
];

foreach($inputs as $input){
    echo processInput($input) . "\n";
}