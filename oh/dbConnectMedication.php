<?php
 //Connect to database
 $USER     = "root";
 $PASSWORD = "mysql01";
 $DBNAME   = "Medication";
 $conn = mysqli_connect("localhost", $USER, $PASSWORD, $DBNAME)
            or die("mySQL server connection failed");
?>