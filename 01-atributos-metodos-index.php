<?php
class Car {
    public $model;
    public $price;
    public $color;

    public function DescriptionCar() {
        // echo "This is a car! <br>";
        // echo "This car is called ". $this->model. " with a price of ". $this->price. " and a color of ". $this->color. ".<br>";
        echo "This car is called {$this->model} with a price of {$this->price} and a color of {$this->color}. <br>";
    }
}

$car1 = New Car();
// var_dump($car1);
$car1->model = "Doge Charger";
$car1->price = 1500000;
$car1->color = "black";
$car1->DescriptionCar();

class Person {
    public $name;
    public $age;
    public $gender;

    public function DescriptionPerson() {
        // echo "This is a person! <br>";
        // echo "This person is called ". $this->name. " with an age of ". $this->age. " and a gender of ". $this->gender. ".<br>";
        echo "This person is called {$this->name} with an age of {$this->age} and a gender of {$this->gender}. <br>";
    }
}

$person1 = New Person();
// var_dump($person1);
$person1->name = "Bruno Mars";
$person1->age = 32;
$person1->gender = "male";
$person1->DescriptionPerson();

class Animal {
    public $name;
    public $age;
    public $size;

    public function DescriptionAnimal() {
        // echo "This is an animal! <br>";
        // echo "This animal is called ". $this->name. " with an age of ". $this->age. " and a size of ". $this->size. ".<br>";
        echo "This animal is called {$this->name} with an age of {$this->age} and a size of {$this->size}. <br>";
    }
}

$animal1 = new Animal();
// var_dump($animal1);
$animal1->name = "Dog";
$animal1->age = 3;
$animal1->size = "medium";
$animal1->DescriptionAnimal();