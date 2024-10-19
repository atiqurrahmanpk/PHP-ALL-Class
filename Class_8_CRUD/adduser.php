<?php
include "connection.php";






if(isset($_POST['add'])){  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $grade = $_POST['grade'];
  $sql = "INSERT INTO `student` (`name`, `email`, `phone`, `grade`) VALUES ('$name', '$email', '$phone', '$grade')";
  $result = mysqli_query($connection, $sql);
  
  if($result){
    header("location: index.php");
  }else{
    die(mysqli_error($connection));
  }
};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data | CRUD Project</title>
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <!-- You should properly set the path from the main file. -->
    <!-- Matcha -->
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">

    
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="column" style="text-align: center;" >
        <h1>User Form</h1>
      </div>
    </div>
  </div>  

  <div class="container">
    <div class="row">
        <div class="column">
        <form action="adduser.php" method="post">
            <fieldset>
                <label for="nameField">Name</label>
                <input type="text" placeholder="Your Name" name="name" id="nameField">

                <label for="emailField">Email</label>
                <input type="email" placeholder="example@ex.com" name="email" id="emailField">

                <label for="phoneField">Phone Number</label>
                <input type="number" placeholder="017XXXXXXXX" name="phone" id="phoneField">

                <label for="gradeField">Grade</label>
                <input type="text" placeholder="A+,B,C" name="grade" id="gradeField">
            
            
                <button type="submit" name="add" id="submit" class="button">Add User</button>
            </fieldset>
        </form>
        </div>
    </div>
  </div>

/**
Video 00:31:00

*/
















<br>
<br>
<br>
</body>
</html>


