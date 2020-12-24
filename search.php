<?php   
   $name=$_GET['name'];
$pin=$_GET['pin'];
include_once('connect.php');


      if(isset($_GET['sub'])){
          $reg=$_GET['query'];
      $pat=mysqli_query($con,"select * from reg where reg_no='$reg'") ;
      $doe=mysqli_fetch_array($pat);   
     

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
              
        $reg_no=$doe['reg_no'] ;
          $pix=$doe['pix'] ;
           
          $date=$doe['date'];
          

          

      }



echo"

<!DOCTYPE html>
 <html>
<head>
<meta http-equiv=\'Content-Type\' content=\'text/html; charset=utf-8\' />
<title>E-ADMISSION_Registration_details</title>
<style type=\'text/css\'>
.sam2{ padding:1px;    color:rgb(204,204,205);  font-size:16;
float:right;     position:relative;
}
ul li a{text-decoration: none; color: white;text-decoration:none; font-family:comic sans ms; font-size:33; font-weight:lighter; color:white;}
ul li a:visited{color: white; }
.head{background-color: #0F7ACC; width: 991px; height:50px; border-radius:7px;}
h1{ text-align:center; text-decoration:none; font-family:comic sans ms; font-size:33; font-weight:lighter; color:white;}
h4{ text-align:left; text-decoration:none; font-family:comic sans ms; font-size:28; font-weight:lighter; color:white;}

.h3{margin:-30px 0px 0px 13px; color:black; position:fixed;}
h2{ text-align:center; text-decoration:none; font-family:comic sans ms; font-size:28; font-weight:lighter; color:white;}
.h2{margin:-63px 0px 0px 740px;}

.input{
height:30px; color:gray; width:250px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative;
}
.input2{height:35px; color:gray; width:70px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative; }
.input3{height:35px; color:gray; width:70px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative;}
.submit{
background:#0F7ACC;
color:white;
font-size:15px;
font-family:comic sans ms;
font-weight:bolder; border-radius:25px;
}
.submit:hover{
background:white;
color:black;
font-size:16px;
font-family:comic sans ms;
font-weight:bolder;
}
.main{ width:700px; height:680px; font-size:20; position:relative;}
.main2{background:white; color:#0F7ACC; font-size:16; height:748px; width:780px;  border:1px solid gray;box-shadow: -2px 10px 30px #000;
margin:auto; border-radius:0px 0px 25px 25px; padding:17px;  position:relative; font-family: comic sans ms; 
}
#fam{ background:#0F7ACC; width:100%; height:auto; text-align:center; color:white; font-size:25px; font-weight:bolder;font-family: comic sans ms;  }
  .damd{ float:right; background:transparent; width:auto; height:auto; }
  ul li{
   text-decoration:none; font-family:comic sans ms; font-size:33; font-weight:lighter; color:white;
  width:260px;

float:left;
padding:6px;
margin: 5px 24px 24px 15px; 
list-style: none outside none;
}
</style>
<script language=\'JavaScript\'>
<!-- hide
now= new Date();
/**document.write(\'Time: \' + now.getHours() + \':\' + now.getMinutes() + \'<br>\');
document.write(\'Date: \' + (now.getMonth() + 1) +\'/\' + now.getDate() + \'/\' +
(1900 + now.getYear()));**/
// -->
</script></head>

<body>
<img src=\'img/admission.jpg\' width=\'100%\' height=\'100\'><br>
<div class=\'head\'>
 <ul><li><a href=\'admin2.php?name=$name&pin=$pin\'>BACK</a></li>
    <li>REGISTRATION DETAILS</li>
    <li><a href=\'index.html\'>HOME</a></li>
     </ul>
  </div>
   ";
   echo"<div class=\'damd\'>
<form action=\'\' method=\'GET\' enctype=\'multipart/form-data\'>
<input type=\'text\' required=\'required\' name=\'query\' title=\'Please enter Registration number\' placeholder=\'Search\' class=\'input\'>
<input type=\'submit\' value=\'GO\' class=\'submit\' name=\'sub\'>
</div><br>';
     echo'<br><br> <br>
<div class=\'main2\'>
 <fieldset class=\'fieldset\'><div class=\'sam2\'><img src=\'images/$pix\' width=\'120\' height=\'120\'><br><br<br>Image</div>
<div class=\'mainform\'><br>
Admission Status:&nbsp;&nbsp;&nbsp;$ad<br>  <br> 
First name:&nbsp;&nbsp;&nbsp;$fname<br>  <br> 
Middle name:&nbsp;&nbsp;&nbsp;$mname<br>  <br> 
Surname:&nbsp;&nbsp;&nbsp;$sname<br>  <br> 
Phone Number:&nbsp;&nbsp;&nbsp;$phone_no<br>  <br> 
Gender:&nbsp;&nbsp;&nbsp;$gender<br> <br> 
Address:&nbsp;&nbsp;&nbsp;$address<br> <br> 
Occupation:&nbsp;&nbsp;&nbsp;$occupation<br><br>  
Teller Number:&nbsp;&nbsp;&nbsp;$teller_no<br><br>
State:&nbsp;&nbsp;&nbsp;$state<br><br>
L.G.A:&nbsp;&nbsp;&nbsp;$lga<br><br>
Date of Birth:&nbsp;&nbsp;&nbsp;$day|$month|$year<br><br>
Exam type:&nbsp;&nbsp;&nbsp;$exam_type<br><br>
Jamb Score:&nbsp;&nbsp;&nbsp;$jamb_score<br><br>
Registration Number:&nbsp;&nbsp;&nbsp;$reg_no


</fieldset>  </div>
";    
?>
 <br>  <br>  <br>
<div id='fam'> <br>E-LOGBOOK Copyright &copy; &nbsp;<script>document.write((now.getYear() + 1900)) ;</script> by Elvis Joseph<br><br></div>
      


</body>
</html>