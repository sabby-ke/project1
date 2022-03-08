<?php
//Check if button add has been clicked
if (isset($_POST["submit"])){
    //Start receiving data from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
     //Connect to the database to save
     require_once "db_connection.php";
    $insertQuery = "INSERT INTO `users`(`username`, `password`) 
    VALUES ('$username','$password')";
    $save = mysqli_query($connection,$insertQuery);
    if (isset($save)){
        header("location:welcome.php");
    }else{
        echo "try again!!";
    }
}