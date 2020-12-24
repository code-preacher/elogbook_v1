<?php

$pin=$_GET['pin'];
include_once('connect.php');
$ym=mysqli_query($con,"select * from logbook where matno='$pin'");
 $dd=mysqli_fetch_array($ym);
     $md12=$dd['md1'];
     $td22=$dd['td2']; 
      $wd32=$dd['wd3'];  
       $td42=$dd['td4']; 
             $fd52=$dd['fd5']; 
             $noc2=$dd['noc'];
        $cc2=$dd['cc']; 
              $name2=$dd['name'];
              $matno2 =$dd['matno'];
              $com2=$dd['com'];
              $cd2=$dd['cd'];
              $apm2=$dd['apm'];
              $apt2=$dd['apt'];
              $apw2=$dd['apw'];
              $apth2=$dd['apth'];
              $apf2=$dd['apf'];
                        $date=$dd['date'];
                                              
if(isset($_POST['submit'])){  
    $md1=$_POST['md1'];
     $td2=$_POST['td2']; 
      $wd3=$_POST['wd3'];  
       $td4=$_POST['td4']; 
             $fd5=$_POST['fd5']; 
             $noc=$_POST['noc'];
        $cc=$_POST['cc']; 
              $name=$_POST['name'];
              $matno =$_POST['matno'];
              $com=$_POST['com'];
              $cd=$_POST['cd'];
              $apm='NO';
              $apt='NO';
              $apw='NO';
              $apth='NO';
              $apf='NO';
                        $date=date('d/m/y \@ g:i A'); 
             
          
mysqli_query($con,"UPDATE logbook SET md1='$md1',td2='$td2',wd3='$wd3',td4='$td4',fd5='$fd5',name='$name',matno='$matno',cc='$cc',noc='$noc',com='$com',cd='$cd',date='$date',apm='$apm',apt='$apt',apw='$apw',apth='$apth',apf='$apf' WHERE matno='$pin'");
   
  echo"<script>alert('UPDATED SUCCESSFUL....')

        </script>";   

}




echo"
<!DOCTYPE html>
 <html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>E-logbook_Registration_details</title>
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
height:38px; color:gray; width:995px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative;
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
.main2{background:url(img/b.jpg); color:#0F7ACC; font-size:16; height:1238px; width:780px;  border:1px solid gray;box-shadow: -2px 10px 30px #000;
margin:auto; border-radius:0px 0px 25px 25px; padding:17px;  position:relative; font-family: comic sans ms; 
}
#fam{ background:#0F7ACC; width:100%; height:auto; text-align:center; color:white; font-size:12px; font-weight:bolder;font-family: comic sans ms;  }

</style>
<script language=\"JavaScript\">
<!-- hide
d= new Date();
/**document.write(\"Time: \" + now.getHours() + \":\" + now.getMinutes() + \"<br>\");
document.write(\"Date: \" + (now.getMonth() + 1) +\"/\" + now.getDate() + \"/\" +
(1900 + now.getYear()));**/
// -->
</script></head>

<body>
<div class='head'><h1>LOGBOOK UPDATE</h1><h2 class='h2'><a href='index.html' style='color:#ffffff'>HOME</a></h2>  </div>
   <br>
   
   <div class=\'main2\'>
 <fieldset class='fieldset'><div class='mainform'><br><br>
<form action='' method='post' enctype='multipart/form-data'>
<table style='color:#0F7ACC;font-family:comic sans ms; border: 1px solid gray;' border='1' >
  <tr><td>Day</td><td>Description Of Work
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>MONDAY:</td><td><textarea row='20' col='50' reqired='required'  name='md1'  class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>TUESDAY:</td><td><textarea row='20' col='50' reqired='required' name='td2'  class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>WEDNESDAY:</td><td><textarea row='20' col='50' reqired='required' name='wd3'  class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>THURSDAY:</td><td><textarea row='20' col='50' reqired='required' name='td4' class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>FRIDAY:</td><td><textarea row='20' col='50' name='fd5' reqired='required'  class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Student Name:</td><td><textarea row='20' col='50' name='name' reqired='required' class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Matriculation Number:</td><td><textarea row='20' col='50' name='matno' reqired='required' class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Name Of Company :</td><td><textarea row='20' col='50' name='noc' reqired='required' class='input2'> </textarea>
</td></tr>
  
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Company Coordinator:</td><td><textarea row='20' col='50' name='cc' reqired='required' class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Comment By Coordinator:</td><td><textarea row='20' col='50' name='com' reqired='required' class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td> Coordinator Date:</td><td><textarea row='20' col='50' name='cd' reqired='required' class='input2'> </textarea>
</td></tr>
 
   </table>                          
         <br>  <br> 
 <br><br> 
       <hr color=\'gray\' > 
       
      

    
<br><center><input type='submit' value='Update' class='submit' name='submit'>&nbsp;&nbsp;&nbsp;&nbsp;<input type='reset' value='Clear' class='submit' ></center></form>



</fieldset>  </div>
   
   
<div class=\'main2\'>
 <fieldset class='fieldset'><div class='mainform'><br><br>
MONDAY:&nbsp;&nbsp;&nbsp;$md12<br>  <br>  <hr color='purple'><br>
TUESDAY:&nbsp;&nbsp;&nbsp;$td22<br>  <br> <hr color='brown'><br>
WEDNESDAY:&nbsp;&nbsp;&nbsp;$wd32<br>  <br><hr color='blue'><br> 
THURSDAY:&nbsp;&nbsp;&nbsp;$td42<br>  <br> <hr color='gray'><br>
FRIDAY:&nbsp;&nbsp;&nbsp;$fd52<br> <br>     <hr color='yellow'><br>
Student Name:&nbsp;&nbsp;&nbsp;$name2<br><br>  <hr color='orange'><br>
Company Coordinator:&nbsp;&nbsp;&nbsp;$cc2<br><br> <hr color='pink'><br>
Name Of Company:&nbsp;&nbsp;&nbsp;$noc2<br><br>     <hr color='black'><br>
Comment By Coordinator:&nbsp;&nbsp;&nbsp;$com2<br><br><hr color='green'><br>
Coordinator Date:&nbsp;&nbsp;&nbsp;$cd2


</fieldset>  </div>
";    
?>
 <br>  <br>  <br>
<div id='fam'> <br>E-Log Book Copyright &copy; &nbsp;<script>document.write((d.getYear() + 1900)) ;</script>&nbsp;&nbsp;&nbsp;&nbsp;Elvins Joseph<br><br></div>
      


</body>
</html>