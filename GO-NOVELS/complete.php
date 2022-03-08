<?php
if (isset($_POST["submit"])){
    //Start receiving data from the form
    $novelName = $_POST["n_name"];
    $authorsName = $_POST["a_name"];
    $orderemail = $_POST["email"];
    $ordercode = $_POST["code"];
    echo "your order was sucessfull!!.We will contact you via email shortly";
}
else{
    echo "please fill in all the fields";
}
     