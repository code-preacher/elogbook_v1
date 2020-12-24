<?php
   $name=$_GET['name'];
$pin=$_GET['pin'];
include_once('connect.php');
  $do=mysqli_query($con,"select * from reg")  ;
  $dop=mysqli_query($con,"select* from reg where admission_status='admitted'");
  $dope=mysqli_num_rows($dop);
   $dopz=mysqli_query($con,"select* from reg where admission_status='pending not admitted'");
  $dopez=mysqli_num_rows($dopz);
  echo"<img src='img/admission.png' width='100%' height='100'><br>"; 
  echo"<table border='1' style='font-size:11px; color:blue; width:100%;'><tr>
  <td><a href='admin2.php?name=$name&pin=$pin' style='text-decoration:none;'><input type='button' value='BACK'></a></td>
  <td>Total number of student admitted:$dope &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Total number of students unadmitted:$dopez</td></tr></table>";
  echo"<table border='1' style='font-size:11px; color:blue;'>";
  echo"<tr>
   <td>S/N</td> <td>Admission_status</td><td>Fullname</td><td>Teller number</td><td>Gender</td><td>State</td><td>Date of Birth</td><td>Exam type</td><td>Jamb Score</td>
   
   <td>Maths</td><td>English</td><td>Phy</td><td>Chem</td><td>Bio</td><td>Econs</td><td>Govt</td><td>Geo</td><td>Comm</td><td>Hist</td>
     <td>Crs</td><td>Lit</td><td>Switch</td><td>Reg_no</td>  </tr>";
  while($doe=mysqli_fetch_array($do)){
      $id=$doe['id'];
     $ad=$doe['admission_status'] ;
    $fname=$doe['fname'];
     $mname=$doe['mname']; 
      $sname=$doe['sname'];  
       $address=$doe['address']; 
             $phone_no=$doe['phone_no']; 
             $teller_no=$doe['teller_no'];
        $occupation=$doe['occupation']; 
              $gender=$doe['gender'];
              $state=$doe['state'];
              $lga=$doe['lga'];
              $day=$doe['day'] ;
              $month=$doe['month'];
              $year=$doe['year'];
              $exam_type=$doe['exam_type'];
              $jamb_score=$doe['jamb_score'];

              $mathematics=$doe['mathematics'];
               $english=$doe['english'];
              $physics=$doe['physics'];
              $chemistry=$doe['chemistry'];
              $biology=$doe['biology'];
              $economics=$doe['economics'];
              $government=$doe['government'];
              $geography=$doe['geography'];
              $commerce=$doe['commerce'];
              $history=$doe['history'];
              $crs=$doe['crs'];
              $literature=$doe['literature'];
        $reg_no=$doe['reg_no'] ;
          $pix=$doe['pix'] ;
           
          $date=$doe['date'];
      
      echo"<tr>
      
           <td>$id</td> <td>$ad</td><td><a href='search2.php?id=$id' style='text-decoration:none;'>$sname&nbsp;$mname&nbsp;$fname</a></td><td>$teller_no</td><td>$gender</td><td>$state</td><td>$day|$month|$year</td><td>$exam_type</td><td>$jamb_score</td>
   
   <td>$mathematics</td><td>$english</td><td>$physics</td><td>$chemistry</td><td>$biology</td><td>$economics</td><td>$government</td><td>$geography</td><td>$commerce</td><td>$history</td>
     <td>$crs</td><td>$literature</td><td><a href='update.php?id=$id' style='text-decoration:none;'><input type='button' value='switch'></a></td><td>$reg_no</td>  </tr>";
      
      
      
      
     
     
      
      
  }
  echo'</table>';
?>
