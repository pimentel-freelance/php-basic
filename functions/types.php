<?php 

declare (strict_types=1);

// php 5 - types
// php 7 > - strict types
function add(int $a, int $b): int {
    return $a + $b;
}
var_dump(add((int)8.5, 3));