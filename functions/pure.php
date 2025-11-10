<?php 

// Pure function (Predictable, Has alwais the same output)
function add(int $a, int $b) {
    return $a + $b;
}

var_dump(add(1,3), add(1,3));

// Not pure function
$total = 0;

function addToTotal($value) {
    global $total;
    $total += $value; //side effect
    return $total;
}

var_dump(addToTotal(3), addToTotal(3));