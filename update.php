<?php
$matno=$_GET['matno'];
include_once('connect.php');
  
$ret=mysqli_query($con,"SELECT * FROM logbook where matno='$matno'");
$row=mysqli_fetch_array($ret);

 $matno=$row['matno'];
$apm=$row['apm'];


 if($apm=='NO'){
mysqli_query($con,"UPDATE logbook SET apm='YES' WHERE matno='$matno'");
 }            
 elseif($apm=='YES'){
  mysqli_query($con,"UPDATE logbook SET apm='NO' WHERE matno='$matno'");
 }
 elseif($apm==''){
  mysqli_query($con,"UPDATE logbook SET apm='NO' WHERE matno='$matno'");
 }
 header('location: admin_cpaniel.php?name=admin&pin=admin');

?>