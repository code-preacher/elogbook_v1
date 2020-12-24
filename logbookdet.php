<?php
include_once('connect.php');



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
             
          
mysqli_query($con,"INSERT INTO logbook(md1,td2,wd3,td4,fd5,name,matno,cc,noc,com,cd,date,apm,apt,apw,apth,apf) VALUES ('$md1','$td2','$wd3','$td4','$fd5','$name','$matno','$cc','$noc','$com','$cd','$date','$apm','$apt','$apw','$apth','$apf')");
   
  echo"<script>alert('REGISTRATION SUCCESSFUL....')

        </script>";   

}




echo"
<!DOCTYPE html>
 <html>
<head>
<meta http-equiv=\'Content-Type\' content=\'text/html; charset=utf-8\' />
<title>E-logbook_Registration_details</title>
<style type=\'text/css\'>
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
.main{ word-wrap:break-word;width:700px; height:680px; font-size:20; position:relative;}
.main2{word-wrap:break-word;background:url(img/b.jpg); color:#0F7ACC; font-size:20; height:1738px; width:780px;  border:1px solid gray;box-shadow: -2px 10px 30px #000;
margin:auto; border-radius:0px 0px 25px 25px; padding:17px;  position:relative; font-family: comic sans ms; 
}
#fam{ background:#0F7ACC; width:100%; height:auto; text-align:center; color:white; font-size:25px; font-weight:bolder;font-family: comic sans ms;  }

</style>
<script language=\'JavaScript\'>
<!-- hide
d= new Date();
/**document.write(\'Time: \' + now.getHours() + \':\' + now.getMinutes() + \'<br>\');
document.write(\'Date: \' + (now.getMonth() + 1) +\'/\' + now.getDate() + \'/\' +
(1900 + now.getYear()));**/
// -->
</script></head>

<body>
<img src=\'img/elogbook.jpg\' width=\'100%\' height=\'190\'><br>
<div class=\'head\'><h1>LOGBOOK DETAILS</h1><h2 class=\'h2\'><a href=\'index.html\' style=\'color:#ffffff\'>HOME</a></h2>  </div>
   <br>
   
<div class=\'main2\'>
 <div class=\'mainform\'><br><br>

MONDAY:&nbsp;&nbsp;&nbsp;$md1<br>  <br>  <hr color='purple'><br>
TUESDAY:&nbsp;&nbsp;&nbsp;$td2<br>  <br> <hr color='brown'><br>
WEDNESDAY:&nbsp;&nbsp;&nbsp;$wd3<br>  <br><hr color='blue'><br> 
THURSDAY:&nbsp;&nbsp;&nbsp;$td4<br>  <br> <hr color='gray'><br>
FRIDAY:&nbsp;&nbsp;&nbsp;$fd5<br> <br>     <hr color='yellow'><br>
Student Name:&nbsp;&nbsp;&nbsp;$name<br><br>  <hr color='orange'><br>
Company Coordinator:&nbsp;&nbsp;&nbsp;$cc<br><br> <hr color='pink'><br>
Name Of Company:&nbsp;&nbsp;&nbsp;$noc<br><br>     <hr color='black'><br>
Comment By Coordinator:&nbsp;&nbsp;&nbsp;$com<br><br><hr color='green'><br>
Coordinator Date:&nbsp;&nbsp;&nbsp;$cd

</fieldset>  </div> </div>
";    
?>
     <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br>
<div id='fam'> <br>E-Log Book Copyright &copy; &nbsp;<script>document.write((d.getYear() + 1900)) ;</script>  <br><br></div>
      


</body>
</html>