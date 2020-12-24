<?php
 $name=$_GET['name'];
$pin=$_GET['pin'];
include_once('connect.php');
 $doo=mysqli_query($con,"select * from reg where username='$name' and pin='$pin'");
 $doo2=mysqli_num_rows($doo);
 $d3=mysqli_fetch_array($doo);
    
    $fname=$d3['fname'];
     $lname=$d3['lname']; 
      $dept=$d3['dept'];  
       $matno=$d3['matno']; 
             $cos=$d3['cos']; 
             $noc=$d3['noc'];
        $cc=$d3['cc']; 
                            $gender=$d3['gender'];
              $state=$d3['state'];
              $lga=$d3['lga'];
                    $date=$d3['date']; 
              $dob=$d3['date_of_birth'];
                $pix=$d3['pix']; 
          




echo"
<!DOCTYPE html>
 <html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>E-logbook_profile_details</title>
<style type=\"text/css\">
.sam2{ padding:1px;    color:rgb(204,204,205);  font-size:16;
float:right;     position:relative;   font-family:comic sans ms; 
}
a:link{text-decoration:none;font-family:comic sans ms; }
.head{background-color: #0F7ACC; width: 100%; height:50px; border-radius:7px;font-family:comic sans ms; }
h1{ text-align:center; text-decoration:none; font-family:trebuchet ms; font-size:33; font-weight:lighter; color:white;}
.h3{margin:-30px 0px 0px 13px; color:black; position:fixed;font-family:comic sans ms; }
h2{ text-align:center; text-decoration:none; font-family:trebuchet ms; font-size:28; font-weight:lighter; color:white;}
.h2{margin:-63px 0px 0px 740px;font-family:comic sans ms; }

.input2{
height:38px; color:gray; width:250px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative;
}
.input{height:35px; color:gray; width:70px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative; }
.input3{height:35px; color:gray; width:70px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative;}
.submit{
background:#0F7ACC;
color:white;
font-size:15;
font-family:comic sans ms;
font-weight:bolder; width:110px; height:38px; cursor:pointer;   position:relative;
}
.submit:hover{
background:white;
color:black;
font-size:16;
font-family:comic sans ms;
font-weight:bolder;      position:relative;
}
.main{ width:700px; height:680px; font-size:20; position:relative;}
.main2{background:url(img/b.jpg); color:#0F7ACC; font-size:16; height:550px; width:780px;  border:1px solid gray;box-shadow: -2px 10px 30px #000;
margin:auto; border-radius:0px 0px 25px 25px; padding:17px;  position:relative; font-family: comic sans ms; 
}
#fam{ background:#0F7ACC; width:100%; height:auto; text-align:center; color:white; font-size:12px; font-weight:bolder;font-family: comic sans ms;  }

</style>
<script language=\"JavaScript\">
<!-- hide
d= new Date();
/**document.write(\'Time: \' + now.getHours() + \':\' + now.getMinutes() + \'<br>\');
document.write(\"Date: \" + (now.getMonth() + 1) +\"/\" + now.getDate() + \"/\" +
(1900 + now.getYear()));**/
// -->
</script></head>

<body>
<div class=\"head\"><h1>PROFILE DETAILS</h1><h2 class=\"h2\"><a href=\"index.html\" style=\"color:#ffffff\">HOME</a></h2>  </div>
   <br>
   
<div class=\"main2\">
 <fieldset class=\"fieldset\"><div class=\"sam2\"><img src=\"image/$pix\" width=\"220\" height=\"220\"><br><br<br>Your Image</div>
<div class=\"mainform\"><br><br>

First name:&nbsp;&nbsp;&nbsp;$fname<br>  <br> 
Last name:&nbsp;&nbsp;&nbsp;$lname<br>  <br> 
Department:&nbsp;&nbsp;&nbsp;$dept<br>  <br> 
Matriculation Number:&nbsp;&nbsp;&nbsp;$matno<br>  <br>
Course Of Study:&nbsp;&nbsp;&nbsp;$cos<br><br> 
Name Of Company:&nbsp;&nbsp;&nbsp;$noc<br><br>      
Company Coordinator:&nbsp;&nbsp;&nbsp;$cc<br> <br> 
State:&nbsp;&nbsp;&nbsp;$state<br><br>
L.G.A:&nbsp;&nbsp;&nbsp;$lga<br><br>
Date of Birth:&nbsp;&nbsp;&nbsp;$dob<br><br>
Registration Date:&nbsp;&nbsp;&nbsp;$date


</fieldset>  </div>
";    
?>
 <br>  <br>  <br>
<div id="fam"> <br>E-Log Book Copyright &copy; &nbsp;<script>document.write((d.getYear() + 1900)) ;</script>&nbsp;&nbsp;Elvins Joseph<br><br></div>
      


</body>
</html>