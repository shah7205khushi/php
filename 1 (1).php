<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

 class Car {
 public $brand;
 public $model;
 public $color;


public function startEngine() {

echo " Engine started!";
 }
 }

$myCar = new Car();
 $myCar->brand = "BMW";
 $myCar->model = "Q8";
 $myCar->color = "Mat Black";

echo $myCar->brand;
echo $myCar->model;
echo $myCar->color;
 $myCar->startEngine();

 //inheritance


 class Animal {
    
     public function makeSound() {
     echo "Some generic sound";
     }
     }
    
     class Dog extends Animal {
     public function makeSound() {
     echo "Woof!";
     }
     }
    
     $dog = new Dog();
     $dog->makeSound();

 ?>






</body>
</html>