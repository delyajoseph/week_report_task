
<?php
/*
@author      Delya Peter
@date        28-06-2020
@description This page is to display the all the medication records
*/
?>
<html lang="en">
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .btn {
            background-color: rgb(28, 223, 28);
            margin-top: 0px;
            color:White;
            font-weight: bold;
            margin-left: 110rem;
            font-size : 16px;
        }

        .heading{
            margin-left:50rem;
            margin-top: 50px;
        }
  </style>
    </head>
    <body>
        <h1 class= "heading">Weekly medication report</h1>
        <div class = "row">
            <div class = "col-3">
                <a class ="btn" href="intake.html">Add medication</a>
            </div>
        </div>
        <div style= " margin-top:25px"class = "row">
    <?php
        require 'dbConnectMedication.php';
        $sql = "SELECT * FROM MedIntake  WHERE intake_date  order by intake_date desc";
        $result = mysqli_query($conn, $sql) or die("Error reading report - ".mysqli_error($conn));
    ?>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Day</th>
                    <th scope="col">Time</th>
                    <th scope="col">Name of medicine</th>
                    <th scope="col">Dosage</th>
                    <th scope="col">Type of medicine</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        
            <tbody>
    
            <?php
        
                while ($row = mysqli_fetch_array($result))
                {
		            echo "<tr>";
				    echo "<td>$row[intake_date]</td>";
      			    echo "<td>$row[intake_day]</td>";
      			    echo "<td>$row[intake_time]</td>";
                    echo "<td>$row[name_med]</td>";
                    echo "<td>$row[Dosage]</td>";
                    echo "<td>$row[type_med]</td>";              
                    echo "<td ><a href=edit-dept.php?ID=$row[id]></a> " .
                            "<a href=delete-record.php?ID=$row[id]>Delete</a></td>";
                    echo "</tr>"; 
                }
                mysqli_close($conn);
        
            ?>
            </tbody>   
        </table>
    
    </div>
</div>
<form action=week-report.php method=GET>
<div class = "row">
        <div class = "col-3">
        <input type="submit" class="btn" value="previous week report">
         
        </form>
        </div>
        
</body>
    </html>