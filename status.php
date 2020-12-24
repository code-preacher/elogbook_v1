<?php
  $pin=$_GET['pin'];
include_once('connect.php');
             
$pk=mysqli_query($con,"select * from logbook where matno='$pin' ");
 $doo2=mysqli_num_rows($pk);
   $lo=mysqli_fetch_array($pk);

              $apm=$lo['apm'];
              $apt=$lo['apt'];
              $apw=$lo['apw'];         
                $apth=$lo['apth'];
                  $apf=$lo['apf'];

      

echo"
<!DOCTYPE html>
 <html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>E-logbook_Status_details</title>
<style type='text/css'>
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
.main2{wordwrap:break-word;background:url(img/b.jpg); color:#0F7ACC; font-size:20; height:538px; width:780px;  border:1px solid gray;box-shadow: -2px 10px 30px #000;
margin:auto; border-radius:0px 0px 25px 25px; padding:17px;  position:relative; font-family: comic sans ms; 
}
#fam{ background:#0F7ACC; width:100%; height:auto; text-align:center; color:white; font-size:12px; font-weight:bolder;font-family: comic sans ms;  }

</style>
<script language='JavaScript'>
<!-- hide
d= new Date();
/**document.write(\'Time: \' + now.getHours() + \':\' + now.getMinutes() + \'<br>\');
document.write(\"Date: \" + (now.getMonth() + 1) +\"/\" + now.getDate() + \"/\" +
(1900 + now.getYear()));**/
// -->
</script></head>

<body>
<img src='img/elogbook.jpg' width='100%' height='120'><br>
<div class='head'><h1>APPROVAL DETAILS</h1><h2 class='h2'><a href='index.html' style='color:#ffffff'>HOME</a></h2>  </div>
   <br>
   
<div class='main2'>
 <div class='mainform'><br><br>
 <table style='color:#0F7ACC;font-family:comic sans ms; border: 1px solid gray;' border='1' width='100%' >
  <tr><td>Day</td><td>Approval Status</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>MONDAY:</td><td> $apm</td></tr>
 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
  <tr><td>TUESDAY:</td><td> $apt</td></tr>
 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td>WEDNESDAY:</td><td> $apw</td></tr>
 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
     <tr><td>THURSDAY:</td><td> $apth</td></tr>
 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
       <tr><td>FRIDAY:</td><td> $apf</td></tr>
 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>

</table>


</fieldset>  </div> </div>
";    
?>
     <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br>
<div id='fam'> <br>E-Log Book Copyright &copy; &nbsp;<script>document.write((d.getYear() + 1900)) ;</script>&nbsp;&nbsp;Elvins Joseph<br><br></div>
      


</body>
</html>