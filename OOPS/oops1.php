<?php

// $pascal ='FirstName';
// $camel = 'firstName';
// $snake='first_name';
// $kebab = 'first-name';
// $lowercase='firstname';
// $uppercase='FIRSTNAME';
class Person{
    public $name;
    public $age;
    public $isLocal=false;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function makeLocal(){
        $this->isLocal = true;
    }
}


$person1 = new Person("Abbas Darbar",16);
$person2 = new Person("Aditya Yadav",73);

$people=[
    $person1, 
    $person2
];



include "../views/oops1.view.php";
