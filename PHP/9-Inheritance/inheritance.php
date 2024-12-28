<?php
//Parent Class
class Car{
    public $brand;
    public function __construct($brand){
        $this->brand = $brand;
    }
    public function start(){
        echo "{$this->brand} is starting.\n";
    }
}
//Child Class :Extends is a inheritance example
class ElectricCar extends Car{
    public function charge(){
        echo "{$this->brand} is charging.\n";
    }
}
//Car 1
$car = new Car("Toyota");
$car -> start();
//Car 2
$electricCar = new ElectricCar("Tesla");
$electricCar -> start();
$electricCar -> charge();