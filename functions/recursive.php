<?php 

// The function is calling itself, so it's recursion
function factorial(int $n): int {
    echo "$n\n";
    if ($n === 0 || $n === 1) { //Base case
        return 1;
    }
    return $n * factorial($n -1); //Recursive case
}

 var_dump(factorial(5));