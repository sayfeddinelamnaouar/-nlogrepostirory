<?php

class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$names = [
    'John', 'Jane', 'James', 'Jessica', 'Jack', 'Jill', 'Justin', 'Julia', 'Jacob', 'Jasmine',
    'David', 'Diana', 'Daniel', 'Deborah', 'Derek', 'Dawn', 'Dominic', 'Daisy', 'Dustin', 'Dana',
    'Mark', 'Mary', 'Matthew', 'Megan', 'Michael', 'Michelle', 'Miles', 'Molly', 'Maxwell', 'Mia',
    'Peter', 'Paula', 'Philip', 'Patricia', 'Preston', 'Penelope', 'Parker', 'Piper', 'Perry', 'Priscilla',
    'Ryan', 'Rachel', 'Robert', 'Rebecca', 'Richard', 'Riley', 'Raymond', 'Rose', 'Russell', 'Raven'
];

$people = [];

for ($i = 0; $i < 50; $i++) {
    $name = $names[array_rand($names)];
    $age = rand(18, 70);
    $person = new Person($name, $age);
    $people[] = $person;
}

foreach ($people as $person) {
    echo $person->getName() . ' is ' . $person->getAge() . ' years old.' . PHP_EOL;
}
