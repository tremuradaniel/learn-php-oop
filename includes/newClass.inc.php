<?php

class Person {
    // Properties and Methods goes here
    public $info = "This is some info";
    public static $drinkingAge = 18;
    public $age = 20;
}

$person = new Person;

echo $person->age . '</br>';
echo Person::$drinkingAge;

// var_dump($object);
