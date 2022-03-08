<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fantasy</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <h1 class="text-info text-center">fantasy novels</h1>
    <table class="table table-secondary table-hover">
        <tr>
            <th>Name</th>
            <th>novel id</th>
            <th>author</th>
            <th>hardcopy price</th>
            <th>softcopy price</th>
            <th>order</th>
            
        </tr>
        <?php
        //Connect to the db to select the data
        require_once "db_connection.php";
        //Prepare the select query
        $selectQuery = "SELECT * FROM fantasy";
        //Use mysqli_query() to execute the select query
        $fantasys = mysqli_query($connection,$selectQuery);
        //Use a loop to print the voters
        foreach ($fantasys as $fantasy) {
            $fantasyName = $fantasy["f_name"];
            $fantasynovelid = $fantasy["f_novel_id"];
            $fantasyauthor = $fantasy["f_author"];
            $fantasyhardcopyprice = $fantasy["f_hardcopyprice"];
            $fantasysoftcopyprice = $fantasy["f_softcopyprice"];
            
            echo "<tr>
                       <td>$fantasyName</td>
                       <td>$fantasynovelid</td>
                       <td>$fantasyauthor</td>
                       <td>$fantasyhardcopyprice</td>
                       <td>$fantasysoftcopyprice</td>
                       <td><a class='btn btn-danger' href='order.php'>order</a></td>
                       
                </tr>";
        }
        ?>
    </table>
</body>
</html>