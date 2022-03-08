<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sci-fi</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <h1 class="text-info text-center">sci-fi novels</h1>
    <table class="table table-dark table-hover">
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
        $selectQuery = "SELECT * FROM mystery";
        //Use mysqli_query() to execute the select query
        $mysterys =mysqli_query($connection,$selectQuery);
        //Use a loop to print the voters
        foreach ($mysterys as $mystery) {
            $mysteryName = $mystery["m_name"];
            $mysterynovelid = $mystery["m_novel_id"];
            $mysteryauthor = $mystery["m_author"];
            $mysteryhardcopyprice = $mystery["m_hardcopyprice"];
            $mysterysoftcopyprice = $mystery["m_softcopyprice"];
            
            echo "<tr>
                       <td>$mysteryName</td>
                       <td>$mysterynovelid</td>
                       <td>$mysteryauthor</td>
                       <td>$mysteryhardcopyprice</td>
                       <td>$mysterysoftcopyprice</td>
                       <td><a class='btn btn-danger' href='order.php'>order</a></td>
                       
                </tr>";
        }
        ?>
    </table>
</body>
</html>