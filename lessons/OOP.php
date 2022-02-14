<?php

class Car {

    protected $brand;
    protected $model;
    protected $year;
    protected $mileage;


    public function __construct($b, $m, $y) {
      $this->brand = $b;
      $this->model = $m;
      $this->year = $y;
      $this->mileage = $mileage;
      
    }
        
    public function drive () {
        echo "$this->brand  $this->model ($this->year, $this->mileage) driving<br>";
    }
    public function addMilage($mileage) {
      $error = false;
      if ($mileage)
      $this->mileage += $mileage;
    }  
}
     
class Electrocar extends Car {
  public function
}


$audi = new Car('Audi', 'Q5', 2021);
$vesta = new Car('Lada', 'Vesta', 2020, 15000);

$audi->drive();
$vesta->drive();

$currentAudiMileage = $audi->addMilage(2000);
echo $currentAudiMileage . '<br>';

$vesta->addMilage(-10000);

$audi->drive();
$vesta->drive();
