<?php

namespace oop;

class car  {
    public $make;
    public $model;
    public $year;
    public $color;

    public $status;

    public function __construct(){
        echo  "new car created ";
        $this->park();
}

    public function print()
    {
        echo "This car is $this->color, and is $this->status.";
    }
    public function forward()
    {
        $this->status = "moving forward";
    }

    public function park()
    {
        $this->status = "parked";
    }
}


$ryansCar = new car();
$ryansCar->color = "Black";
$ryansCar->forward();

$nicksCar = new car();
$nicksCar->color = "White";
$nicksCar->park();

$michaelsCar = new car();
$michaelsCar->color = "Blue";


$ryansCar->print();
$nicksCar->print();
$michaelsCar->print();

