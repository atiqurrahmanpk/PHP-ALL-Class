<?php

// Define a class Name Fruit
class fruit
{
    // properties
    public $name;

    // Methods
    public function set_name($fruit_name){
        
        //Assain the value to the properties = use $this keyword
        $this->name = $fruit_name;
    }
    // Methods to Print
    public function get_fruit_name(){
        return $this->name;
    }
}
// create an object
$FruitsItemName = new fruit();
// call the method
$FruitsItemName->set_name('Banana');
echo "The name of the fruit is: "."<strong>".$FruitsItemName->get_fruit_name()."</strong>";