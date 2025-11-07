<?php 

$superhero = "Superman";

function revealIdentity() {
    global $superhero;
    echo "$superhero real name is Clark Kent\n";
    // $superhero = "Spiderman";
}

revealIdentity();

function countVisitor(){
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor #$visitorCount has arrived\n";
}

countVisitor();
countVisitor();
countVisitor();