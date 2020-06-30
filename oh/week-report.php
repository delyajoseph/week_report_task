<?php
/*
@author      Delya Peter
@date        28-06-2020
@description This page is to create previous week record to csv format
*/


require 'dbConnectMedication.php'; 

$filename = "weekly_report.csv";
$fp = fopen('php://output', 'w');

$endWeek = date('Y-m-d',strtotime("Sunday Last Week"));
$startWeek = date('Y-m-d',strtotime('-7 day', strtotime($endWeek)));


$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='Medication' AND TABLE_NAME='MedIntake'";

$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_row($result)) {
	$header[] = $row[0];
}	

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$sql= "SELECT * FROM MedIntake  WHERE intake_date BETWEEN '$startWeek' AND '$endWeek'  ORDER BY intake_date ASC";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}
exit;
?>