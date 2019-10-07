<?php

if (!isset($_SESSION['Username'])){
    header("location:Login.php");
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 01/10/19
 * Time: 10:23
 */

//to save data into the db start by connecting to the database
//to do this create the connection on a separate file and require it
//from this file

require 'Connection.php';
//check if the save button has bee clicked

if (isset($_POST['btn_save'])){
    //start receiving data from the user
    $Name =$_POST['x'];
    $Age =$_POST['y'];
    $Phone =$_POST['z'];

    //save the data to the db using the insert query

    $InsertQuery ="INSERT INTO `User_data`(`id`, `jina`, `umri`, `simu`) VALUES (NULL,'$Name','$Age','$Phone')";
    //use mysqli_query function to execute the insert query
    $save =mysqli_query($connect,$InsertQuery);
    //check if saving was succesful
    if (!$save){
        echo"Saving data failed!!";
    }else{
        //echo"Data saved succesfully";
//Go back to save data file
  header("location:save_data.php");

    }

}
