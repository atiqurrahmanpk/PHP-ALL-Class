<?php
// dife a class name company
class company
{
// define a property

public $name;

// Define a method
public function set_name($company_name){

//Assain the value to the properties = use $this keyword

$this->name = $company_name;

// return the value
return $this->name;
}
// echo the value
public function get_name(){
    echo "The name of the company is: "."<strong>".$this->set_name("Nujoom Al-Mal")."</strong>";
}
}

// create an object (instance)
$companyInfo = new company();

// call the method
$companyInfo->get_name();
