
<?php
/*
@author      Delya Peter
@date        29-06-2020
@description This page will add the medication record 
*/
?>
<html>
<body>
   
    <?php
    require 'dbConnectMedication.php';
   
    if(!empty($_GET['mname'])&&!empty($_GET['day'])&&!empty($_GET['time'])&& !empty($_GET['dosage'])&& !empty($_GET['tmed']));
{
        $mname= trim($_GET['mname']);
        $day= date('D');
        $time= trim($_GET['time']);
        $dosage= trim($_GET['dosage']);
        $tmed=trim($_GET['tmed']);

    
    
    if(empty($mname)||empty($day)||empty($time)||empty($dosage)||empty($tmed))
      die("Some  information has not supplied");
    else{
        $sql = "INSERT INTO MedIntake (intake_date,intake_day,intake_time,name_med,Dosage,type_med) VALUES(CURDATE(),'$day', '$time', '$mname', '$dosage', '$tmed')";
        
        $result = mysqli_query($conn, $sql) or die("Error updating record ".mysqli_error($conn));
		 $numrows = mysqli_affected_rows($conn);

         if ($numrows == 1)
		 header("Location: report.php");

		 else
         echo " failed to add. $numrows were updated"; 
        
         
        }  
     
}  
 
?>

</body>
</html>
