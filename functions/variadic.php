<?php 

declare(strict_types=1);


function sum(int ...$numbers): int {
    $sum = 0;
    var_dump($numbers);
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

var_dump(sum());
var_dump(sum(1));
var_dump(sum(1, 2, 3, 4, 5));

$numbers = [1,2,3];

var_dump(sum(...$numbers));


function introduceTeam( string $teamName, string ...$members): void {
    var_dump($members);
    echo "Team: $teamName\n";
    echo "Members: " . implode(", ", $members) . "\n";
}

introduceTeam("A Team", "John", "Mr T");

$members = ["Harry", "louis", "John"];

introduceTeam("B Team", ...$members);

introduceTeam("C Team", "John", "Mr T", ...$members);