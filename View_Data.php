<?php

if (!isset($_SESSION['Username'])){

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Data</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
<a href="save_data.php"><button class="btn btn-success">Add data</button></a><br>
    <table class="table table-hover table-dark">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
        <?php
        //to collect/select data from the db first connect to the db
        //require connect.php file to achieve this

        require 'Connection.php';
        //select the data using the select query
        $SelectQuery = "SELECT *FROM User_data";

        //to implement the selection use the mysqli_function
        $Select = mysqli_query($connect,$SelectQuery);
        //use the while loop to loop through your data on $Select as you display

        while ($x =mysqli_fetch_assoc($Select)){
            //Extract your looped data that is now on $x
            extract($x);

            echo"
            <tr>
            <td>$id</td>
            <td>$jina</td>
            <td>$umri</td>
            <td>$simu</td>
            <td><a href='Delete_handler.php?x=$id' class='btn btn-danger'>Delete</a></td>
            <td><a href='Update.php?a=$id&b=$jina&c=$umri&d=$simu'  class='btn btn-success'>Update</a></td>
            
            </tr>";
        }
        ?>
    </table>
</body>
</html>