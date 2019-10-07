<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 03/10/19
 * Time: 11:27
 */
if (isset($_POST['btn_reg'])){
    //to register a user , connect to the db
    //require connection.php th achieve this
    require 'Connection.php';
    //start receiving data from the user

    $Username =$_POST['uname'];
    $Password =$_POST['pswd'];
    //start implementing the registration process
    //check if the person is already in the db using the select query

    $SelectQuery ="SELECT * FROM `users` WHERE arafa='$Username'";
    $Select =mysqli_query($connect,$SelectQuery);
    //count the db rows that have records that match what we have selected
    $NumRows =mysqli_num_rows($Select) ;
    //check if the row number is 1 then the person already exists
    if ($NumRows==1){
        echo "Username already exists .please login to continue ";
        die();
    }else{
        //proceed to register using insert query
        $InsertQuery = "INSERT INTO `users`(`id`, `arafa`, `siri`) VALUES (NULL,'$Username','$Password')";
        $Register =mysqli_query($connect,$InsertQuery);
        //check if the registration was succesful
        if (!$Register){
            echo "Registration failed!!";
        }else{
            echo "Registration succesful!!";
            header("location:Login.php");
        }
    }
}