<?php 

declare(strict_types=1);

$nothing = null;
$db = $nothing ?? "default";

var_dump(
    null == null,
    null == false,
    null == 0,
    null == '',
    null == [],
    $nothing,
    $abc,
    isset($abc),
    is_null($abc),
    $abc === null,
    isset($edf),
    $db,
    empty([])
);

function greet(?string $name) {
    echo "Hello, " . ($name ?? "stranger"). "!\n";
}
greet("Alicia");
greet(null);

var_dump(
    array_filter([
        1,
        null,
        "",
        [],
        3
    ])
);