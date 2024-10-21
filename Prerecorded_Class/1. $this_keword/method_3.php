<?php
// Define a class Name person
class person
{
    // Properties
    public $name;
    public $age;

    //Methods YourName
    public function YourName($Your_name){

        //Assain the value to the properties = use $this keyword =Your_name
        $this->name = $Your_name;
    }
    public function set_YourName(){

        //Method to print Your name
        return $this->name;
    }

    //Methods YourAge
    public function YourAge($Your_age){

        //Assain the value to the properties = use $this keyword =Your_age
        $this->age = $Your_age;
    }
    public function set_YourAge(){

        //Method to print Your age
        return $this->age;
    }

}
//create an object
$personInfo = new person();

//call the method
$personInfo->YourName('Atiq');

echo "Your Name is: ".$personInfo->set_YourName();
echo "<br>";
$personInfo->YourAge(30);
echo "Your Age is: ".$personInfo->set_YourAge();
