<?php
   $name=$_POST['name'];
$pin=$_POST['pin'];
$name1=$name;
$pin1=$pin;
include_once('connect.php');                                  
$doo=mysqli_query($con,"select * from reg where username='$name' and pin='$pin'");
 $doo2=mysqli_num_rows($doo);
 if($doo2<1){
    echo"<script>alert('INVALID USERNAME OR PIN,PLEASE RE-LOGIN WITH A VALID ONE....')
        
        window.location='student_login.html';
        </script>";
 
}

 echo"<head>
<style>
body{background:url(img/b.jpg);} 
ul{background:#0F7ACC;max-width: 100%;height:10%;}
 ul li{display:inline-block;float:right;padding: 10px;}
 ul li a{text-decoration:none;color:#fff;padding:20px;position: relative;}
 ul li a:hover{transition:.9s ease-in background;background: #fff;color:#0F7ACC;}
    .submit{
background:#0F7ACC;
color:white;
font-size:16px;
font-family:comic sans ms;
font-weight:bolder; width:275px; height:30px;border-radius:7px;
}
.submit:hover{
background:white;
color:black;
font-size:17px;
font-family:comic sans ms;
font-weight:bolder;
}
 
 </style> </head>
 ";
include_once('connect.php');  
  $do=mysqli_query($con,"select * from reg");
  $dop=mysqli_query($con,"select * from reg");
  $dope=mysqli_num_rows($dop);
   $dopz=mysqli_query($con,"select* from reg");
  $dopez=mysqli_num_rows($dopz);
  echo"<img src='img/elogbook.jpg' width='100%' height='30%'><br><br><br><br>"; 
echo"
 
  <a href='logbook.php?name=$name1&pin=$pin1' style='text-decoration:none;'><input type='button' value='FILL LOG BOOK' class='submit'></a>
   <a href='status.php?pin=$pin1' style='text-decoration:none;'><input type='button' value='STATUS' class='submit'></a>
   <a href='profile.php?name=$name1&pin=$pin1' style='text-decoration:none;'><input type='button' value='VIEW PROFILE' class='submit'></a>
 <a href='updatel.php?pin=$pin1' style='text-decoration:none;'><input type='button' value='UPDATE LOG BOOK' class='submit'></a>
  <a href='updatep.php?name=$name1&pin=$pin1' style='text-decoration:none;'><input type='button' value='UPDATE PROFILE' class='submit'></a>
 <a href='index.html' style='text-decoration:none;'><input type='button' value='LOGOUT' class='submit'></a>
 ";  
?>
