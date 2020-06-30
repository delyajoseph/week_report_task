<?php
/*
@author      Delya Peter
@date        28-06-2020
@description This page is to delete a record
*/
?>
<html>
    <body>

<?php

 if (empty($_GET['ID']))

    die("You must select a charter to delete");

 $ID = $_GET['ID'];

 //open the server connection

 require 'dbConnectMedication.php'; 

//To delete

 $sql = "DELETE FROM MedIntake  WHERE id= $ID";

 $result = mysqli_query($conn, $sql) or die("Error deleting record - ".mysqli_error($conn));

 $numrows = mysqli_affected_rows($conn);

 if ($numrows == 1)
    header("Location: report.php");
 else
    echo "<h2>delete failed. $numrows were deleted</h2>";

 mysqli_close($conn);

?>
    </body>
</html>

