<?php 

// Not recommend using all these types in a single function

function greet(string $name, string $greeting = "Hello", bool $shout = false): string {
    $message = "$greeting, $name!\n";
    return $shout ? strtoupper($message) : $message;
}

echo greet("Alicia");
echo greet("Alice", "Hi");
echo greet("Alice", "Hey", true);
echo greet(name: "Anthony", shout: true);