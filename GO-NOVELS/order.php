<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
       <!--  start of connetion to bootstrap js-->
  <sript scr="assets/bootstrap/js/jquery-3.o.js"></sript>
  <script srr="assets/bootstrap/js/popper.min.js"></script>
  <sript scr="assets/bootstrap/js/bootstrap.js"></sript>
  <!--end of connetion to bootstrap js-->

  <!--start of connetion to bootstrap css-->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap/css/custom.css"> 
</head>
<body>
    <div class="order_p">
    <h2>complete your order!!!</h2>
    <h3>MPESA BUY GOODS AND SERVICES TILL IS 5678129 </h3>
     <form method ="POST" action="complete.php">
     <input class="form-control"  placeholder="please enter the name of the novel" type="text" name="n_name" required><br>
     <input class= "form-control" placeholder="please enter the author's name" type="text" name="a_name" required><br> 
     <input class= "form-control"type ="email" placeholder="please enter your email" name="email" required><br>
     <select class="form control">
     <option value="">Select book</option>
                    <option value="softcopy">softcopy</option>
                    <option value="hardcopy">hardcopy</option>
    <input class= "form-control" type="text" placeholder ="enter transaction code" name="code" required>
    <button type="submit" name="submit" class="btn btn-danger btn-lg"><h ref="" >order</a></button>
</form> 
</div>   
</body>
</html>