<?php
// public: Accessible anywhere
class RentACar {
    public $carModel = "Toyota"; 
    public $pricePerDay = 400; 

    public function rentCar($days) {
        $total = $days * $this->pricePerDay;
        return "$days days: $$total";
    }
}

// accessing public properties and methods
// from outside the class
$rental = new RentACar();
echo $rental->carModel.", ";//access property
echo $rental->rentCar(3);//access method


//----------------------------------

//protected
//Accessible within the class
//Accessible its child classes
class RentACar{
    protected $carModel = "BMW";
    protected $pricePerDay = 1000;

    protected function cost($days){
        return $days * $this->pricePerDay;
    }
}
//child class
class LuxuryRent extends RentACar{
    public function rent($days){
        return "$this->carModel, $days days: $"
        .$this->cost($days);
    }
}
$rental2 = new LuxuryRent();
echo $rental2->rent(7);

//Not Working It's error
$rental3 = new RentACar();
echo $rental3 -> carModel ; 


//********************************** */

// private
// only accessible within the same class

class RentACar {
    private $carModel = "Tesla";
    private $pricePerDay = 1200;

    private function cost($days) {
        return $days * $this->pricePerDay;
    }

    public function details($days) {
        return "$this->carModel, $days days: $" 
        . $this->cost($days);
    }
}

$rental = new RentACar();
echo $rental->details(3); 

//Not Working It's error
echo $rental ->carModel;
