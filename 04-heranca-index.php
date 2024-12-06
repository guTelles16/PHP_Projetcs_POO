<?php

class Vehicle {
    public $brand;
    public $model;
    public $year;
    public $color;

    public function __construct($brand, $model, $year, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function Drive() {
        echo "Driving... <br>";
    }

    public function Stop() {
        echo "Stopping... <br>";
    }
}

class Truck extends Vehicle {
    public function Windshield() {
        echo "Cleaning the window... <br>";
    }
}

$truck1 = new Truck("Volvo", "FH 16", "2016", "black");
$truck1->Drive();
$truck1->Windshield();
var_dump($truck1);
 
class Motorcycle extends Vehicle {
    public function Pedal() {
        echo "Holding the pedal... <br>";
    }
}

$motorcycle1 = new Motorcycle("Honda", "PCX", "2020", "white");
$motorcycle1->Stop();
$motorcycle1->Pedal();
var_dump($motorcycle1);