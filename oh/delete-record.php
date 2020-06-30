<html>
    <body>
       <!-- <h1> Deleted</h1>-->

        <?php

 if (empty($_GET['ID']))

 die("You must select a charter to delete");

 $ID = $_GET['ID'];

 //open the server connection

 require 'dbConnectMedication.php'; 

//delete the product

 $sql = "DELETE FROM MedIntake  WHERE id= $ID";

 $result = mysqli_query($conn, $sql) or die("Error deleting record - ".mysqli_error($conn));

 $numrows = mysqli_affected_rows($conn);

 if ($numrows == 1)
 header("Location: report.php");

 //echo "<h2> deleted</h2>";

 else

 echo "<h2>delete failed. $numrows were deleted</h2>";

 mysqli_close($conn);

 ?>
 

</table>
</body>
        </html>

