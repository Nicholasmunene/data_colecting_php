<?php

if (!isset($_SESSION['Username'])){

}
?>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 03/10/19
 * Time: 09:43
 */

if (isset($_POST['btn_update'])){
    //start by connecting to the db by requiring connection.php

    require 'Connection.php';
    //now receive data that has been updated

    $id =$_POST['w'];
    $name =$_POST['x'];
    $age =$_POST['y'];
    $phone=$_POST['z'];

    //start the update by starting the update query
    $UpdateQuery = "UPDATE `User_data` SET `jina`='$name',`umri`='$age',`simu`='$phone' WHERE id ='$id'";
    //use mysqli function to execute the update

    $Update =mysqli_query($connect,$UpdateQuery);
    //check if update was succesful

    if (!$Update){
        echo "Update failed!!";

    }else {
        //redirect the user back to the View_data.php
        header("location:View_Data.php");
    }
}