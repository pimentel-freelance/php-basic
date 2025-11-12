<?php 

class Person {
    public function __construct(
        public string $name,
        public int $age
        ) {}

    public function introduce(): string {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.\n";
    }
}

$person = new Person("Alice", 40 );
echo $person->introduce();

$person = new Person("Anthony", 30 );
echo $person->introduce();