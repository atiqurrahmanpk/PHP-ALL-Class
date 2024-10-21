<?php

// Define a class Name Fruit
class Fruit
{
// Properties
public $name;

// Methods
public function set_name($Fruit_name){
    
    //Assain the value to the properties = use $this keyword
    $this->name = $Fruit_name;
}

}
// create an object
$apple = new Fruit();
// call the method
$apple->set_name('Apple');
echo "The name of the fruit is: ". $apple->name;




