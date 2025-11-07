<?php 

// $client is an alias to $person, not recomended
$person = "Anthony";
$client = &$person;

var_dump($person, $client);

$client = "Josefa";

var_dump($person, $client);

$person = "Yue";

var_dump($person, $client);