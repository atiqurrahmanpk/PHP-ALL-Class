<?php

$connection = new mysqli('localhost','root','','crud');


if($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}





?>