
<?php

/*
@author      Delya Peter
@date        28-06-2020
@description This page is the basic database connection
*/

 //Connect to database
 $USER     = "root";
 $PASSWORD = "mysql01";
 $DBNAME   = "Medication";
 $conn = mysqli_connect("localhost", $USER, $PASSWORD, $DBNAME)
            or die("mySQL server connection failed");
?>