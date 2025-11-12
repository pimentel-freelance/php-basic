<?php 

class Person {
    public function __construct(
        public string $name,
        public int $age
    ) {}
    public function introduce(): string {
        return "Hi, I'm {$this->name} and I'm {$this->age} year old.";
    }
}

//Inheritance
class Employee extends Person {
    public function __construct(
        public string $name,
        public int $age,
        public string $position
    ) {}

    public function introduce(): string
        {
            return parent::introduce() . " I work as a {$this->position}";
        }    
}

//Polymorphism
$people = [
    new Employee("Josefina", 50, "Baby Sister"),
    new Person("Patria", 34)
];

function introduce(Person $person) {
    echo $person->introduce() . "\n";
}


foreach ($people as $person) {
    introduce($person);
}