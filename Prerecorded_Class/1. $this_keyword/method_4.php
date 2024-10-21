<?php

// Define a class Name PersonDetails
class PersonDetails
{
    // properties Name
    public $fname;
    public $lname;
    public $email;

    // Methods
    public function __construct($firstname, $lastname, $your_email){
        
        //Assain the value to the properties = use $this keyword
        $this->fname = $firstname;;
        $this->lname = $lastname;
        $this->email = $your_email;

    }
    // Return the value
    public function getPersonDetails(){
        return $this->fname." ".$this->lname."<br>"."Your email is: ".$this->email;
    }
    // echo the value
    public function echoPersonDetails(){
        echo "Your Name is: " .$this->getPersonDetails();
    }
    
}
// create an object
$personDetailsInfo = new PersonDetails('Atiq', 'Hossain', 'info.atiqurrahmanpk@gmail.com');
// call the method
$personDetailsInfo->echoPersonDetails();


//===========
echo "<br><br>";
//========================
echo "===========================<br>";

// Define a class Name person
class person
{
    // properties Name
    public $firstName;
    public $lastName;
    public $age;

    // Methods
    public function __construct($first_name, $last_name, $your_age){

        //Assain the value to the properties = use $this keyword

        $this->firstName = $first_name;;
        $this->lastName = $last_name;
        $this->age = $your_age;
    }
    // Return the value
    public function set_YourName(){
        return $this->firstName." ".$this->lastName."<br>"."Your age is: ".$this->age;
    }
    // echo the value
    public function get_YourN(){
        echo "Your Name is: " . $this->set_YourName();
    }

}

// create an object
$personInfo = new person('Atiqur', 'Rahman', 30);

// call the method
$personInfo->get_YourN();