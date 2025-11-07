<?php 

function greet($name) {
    return "Hello, $name!\n";
}

echo greet("Anthony");


// Optional function argument
function greetWithTime($name, $time = "day") {
    return "Good $time, $name\n";
}

echo greetWithTime("Patria");
echo greetWithTime("Josefa", "evening");