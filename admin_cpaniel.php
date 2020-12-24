<?php
   $name=$_POST['name'];
$pin=$_POST['pin'];

include_once("connect.php");                                  
$doo=mysqli_query($con,"select * from admin where username='$name' and pin='$pin'");
 $doo2=mysqli_num_rows($doo);
 if($doo2<1){ 

    echo"<script>alert('INVALID USERNAME OR PIN,PLEASE RE-LOGIN WITH A VALID ONE....')
        
        window.location='admin_login.html';
        </script>";
}
echo"<head>
<style>  
body{background:url(img/b.jpg);}
ul{background:#0F7ACC;max-width: 100%;height:40px;}
 ul li{display:inline-block;float:right;padding: 10px;color:brown;}
 ul li a{text-decoration:none;color:#fff;padding:20px;position: relative;}
 ul li a:hover{transition:.9s ease-in background;background: #fff;color:#0F7ACC;}
    .submit{
background:#0F7ACC;
color:white;
font-size:16px;
font-family:comic sans ms;
font-weight:bolder; width:295px; height:30px;border-radius:7px;
}
.submit:hover{
background:white;
color:black;
font-size:17px;
font-family:comic sans ms;
font-weight:bolder;
}
 
 </style> <head>
 ";

include_once("connect.php");  

   $dopz=mysqli_query($con,"select* from reg");
     $dopez=mysqli_num_rows($dopz);
        echo"<img src='img/elogbook.jpg' width='100%' height='100'><br>"; 
 
      
  
  echo"<ul>
      <li> Total number of Students:$dopez
</li> 
        
 <li><a href='index.html'>HOME</a></li>
 </ul>";
 
 echo"<table border='2' cellpadding='5' cellspacing='4' width='100%' style='font-size: 12px;font-weight: bold;border-collapse:collapse;   border:1px solid #d6d6d6;' bgcolor='#eeeeee'> 
";
  echo"<tr>
   <td>S/N</td> <td>Student Name</td><td>Mat-No</td><td>Course of study</td>
   <td>Name of Company</td><td>Company Coordinator</td><td>Gender</td>
  <td>Department</td><td>Approve1</td> <td>Approve2</td><td>Approve3</td><td>Approve4</td><td>Approve5</td>  </tr>";
  while($doe=mysqli_fetch_array($dopz)){
      $id=$doe['id'];
    $fname=$doe['fname'];
     $lname=$doe['lname']; 
        $dept=$doe['dept'];
       $matno=$doe['matno']; 
             $cos=$doe['cos']; 
             $noc=$doe['noc'];
        $cc=$doe['cc']; 
 
              $gender=$doe['gender'];
              
      echo"<tr>
      
           <td>$id</td> <td>$fname&nbsp;&nbsp;$lname</td>
           <td>$matno</td>
               <td>$cos</td> <td>$noc</td> <td>$cc</td> <td>$gender</td> 
               
            <td>$dept</td>
             
            
             
            
            <td><a href='update.php?matno=$matno' style='text-decoration:none;'><input type='button' value='Yes/No'></a></td>
             <td><a href='update.php?matno=$matno' style='text-decoration:none;'><input type='button' value='Yes/No'></a></td>
  <td><a href='update.php?matno=$matno' style='text-decoration:none;'><input type='button' value='Yes/No'></a></td>
  <td><a href='update.php?matno=$matno' style='text-decoration:none;'><input type='button' value='Yes/No'></a></td>
  <td><a href='update.php?matno=$matno' style='text-decoration:none;'><input type='button' value='Yes/No'></a></td>
  
  </tr>";
      
      
      
      
     
     
      
      
  }
  echo"</table>";
 
?>
