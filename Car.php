<?php
//A class is a blueprint it describes what something should have and what it should be able to do.
//An object is the actual thing created using the blue print called class
//Class---> Hosue blueprint, object--->Actual house created using the blueprint.

class Car{

    //properties /fields --- treat them as variables of class
    private $brand;//private properties cannot directly be accessed outside the class
    private $color;//but it can be accessed thorught a public method--> encapsualtion
    public $vehicleType="car";

//Constructor--it is basically a method and it does some functionality whenever we create an object
//basically we are initalizing the properties with values using constructor function.
//the constructor function helps to initialize properties when we are creating a new object

public function __construct($brand,$color="none"){
    $this->brand=$brand; // initializing the properties
//$this->brand refers to the object's property.
//$brand refers to the values(parameters) passed into the constructor.
    $this->color=$color;
//this refers to the properties and methods inside the same class or object.

}

//Getter and setter method
/*
A getter is a method used to retrieve or read the value of a private property from outside the class.
A setter is a method used to assign or modify the value of a private property from outside the class.*/

public function getBrand(){
    return $this->brand;
}

public function setBrand($brand){
     $this->brand=$brand;
}

public function getColor(){
    return $this->color;
}

public function setColor($color){
    $allowedColor=[
        "Red",
        "Green","Yellow","Blue"
    ];
    if(in_array($color,$allowedColor)){
        $this->color=$color;
    }
}


//Now after constructor we are making methods which does some functionality in the class

public function getCarInfo(){
    return "Brand: ". $this->brand. ", Color: ".$this->color;
}

}

/* 
$car01=new Car("volvo","blue");
//Creating a new object and initializing the properties with values via constructor function.

echo $car01->vehicleType;//refering to the property inside the object.

echo "<br>".$car01->getCarInfo()."</br>";//refering to the method inside the class.

?>
*/