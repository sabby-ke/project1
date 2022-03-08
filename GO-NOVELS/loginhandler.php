<?php
//Check if button add has been clicked
if (isset($_POST["submit"])){
    //Start receiving data from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    header("location:welcome.php");
} 
else{
    echo"try again";
}
