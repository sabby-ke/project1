<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
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
    <div class = "register-box">   
    <h1>register here</h1>
    <form action="registerhandler.php" method="POST">
    <div class="form-group">
    <label>username</label>
    <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group">
    <label>password</label>
    <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-lg">register</button>
</form>
    
    </div>
</body>
</html>