<?php

$x = 10;
if ($x > 5) {
    echo "X is greater than 5\n";
}


$score = 60;
if ($score >= 90) {
    echo "A\n";
}elseif ($score >=80) {
    echo "B\n";
}elseif ($score >=70) {
    echo "C\n";
}elseif ($score >=60) {
    echo "D\n";
}else {
    echo "F\n";
}


$num = 14;
if ($num > 0){
    if ($num % 2 == 0){
        echo "Positive even number\n";
    }else {
       echo "Positive odd number\n"; 
    }
}else {
    echo "Non-positive number\n";
}


$username = "admin";
$password = "password123";
if ($username == "admin" && $password == "password123") {
    echo "Success\n";
}else {
    echo "Failure\n";
}