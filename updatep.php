<?php
$name=$_GET['name'];
$pin=$_GET['pin'];
include_once('connect.php');
   $yj=mysqli_query($con,"select * from reg where  matno='$pin'");
 $dd=mysqli_fetch_array($yj);
  $fn=$_POST['fname'];
     $ln=$_POST['lname']; 
      $de=$_POST['dept'];  
       $ma=$_POST['matno']; 
             $co=$_POST['cos']; 
             $no=$_POST['noc'];
        $c=$_POST['cc']; 
              $g=$_POST['gender'];
              $s=$_POST['state'];
              $l=$_POST['lga'];
              $p=$_POST['pix'];
              $d=$_POST['date'];
              $dl=$_POST['dob'];
   include_once('connect.php');
if(isset($_POST['submit'])){
    
    $fname=$_POST['fname'];
     $lname=$_POST['lname']; 
      $dept=$_POST['dept'];  
       $matno=$_POST['matno']; 
             $cos=$_POST['cos']; 
             $noc=$_POST['noc'];
        $cc=$_POST['cc']; 
              $gender=$_POST['gender'];
              $state=$_POST['state'];
              $lga=$_POST['lga'];
              $day=$_POST['day'] ;
              $month=$_POST['month'];
              $year=$_POST['year'];
              $dob=$day.'|'.$month.'|'.$year;
             $pikx=$_FILES['pix']['name'];
          $temp=$_FILES['pix']['tmp_name'];
          $folder='images/' ;   
          $pos=strpos($pikx,'.');
$len=strlen($pikx);
$ext=substr($pikx, $pos, $len); 
            $pikx=str_replace($pikx,'.',rand(00000,99999).$ext );         
        $pix='elogbook'.'_'.$matno.'_'.'$pikx';

          $date=date('d/m/y \@ g:i A');
          move_uploaded_file($temp,$folder.$pix)  ;
          
mysqli_query($con,"UPDATE reg SET fname='$fname',lname='$lname',dept='$dept',pix='$pix',matno='$matno',cos='$cos',noc='$noc',cc='$cc',gender='$gender',state='$state',lga='$lga',date_of_birth='$dob',pin='$matno',username='$matno',date='$date')");
  
  echo"<script>alert('UPDATE SUCCESSFUL....')

        </script>";   

}




echo"
<!DOCTYPE html>
 <html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
<title>E-logbook_Registration_details</title>
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
.main2{background:url(img/b.jpg); color:#0F7ACC; font-size:16; height:1238px; width:780px;  border:1px solid gray;box-shadow: -2px 10px 30px #000;
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

<div class=\"head\"><h1>PROFILE UPDATE</h1><h2 class=\"h2\"><a href=\"index.html\" style=\"color:#ffffff\">HOME</a></h2>  </div>
   <br>
   
<div class='main2'>
 <form action='' method='post' enctype='multipart/form-data'>
 
 <fieldset class='fieldset'><div class='mainform'><br><br>  <div class='sam2'><img src='image/$p' width='220' height='220'><br><br<br>Your Image</div>
<div class='mainform'><br><br>
<table style='color:#0F7ACC;font-family:comic sans ms;'>     <tr><td>
 
First name:<br><input type='text'  value='$fn' required='required' name='fname' title='Please enter your First name' placeholder='First name' class='input2'>
<br><br>Last name:<br><input type='text' value='$ln' required='required' name='lname' title='Please enter your Last name' placeholder='Middle name' class='input2'>
<br><br>Department:<br><input type='text' value='$de'  required='required' name='dept' title='Please enter your Department' placeholder='Department' class='input2'>
<br><br>Matriculation Number:<br><input type='text' value='$ma' required='required' name='matno' title='Please enter your matriculation number' placeholder='Matriculation Number' class='input2'>
 <br><br>Course Of Study:<br><input type='text' value='$co' placeholder='Course Of study' required='required' name='cos' title='Enter course of study' class='input2'>
 <br><br>Name Of Company:<br><input type='text' value='$no' placeholder='Name Of Company' required='required' name='noc' title='Enter name of company' class='input2'>
 <br><br>Company Co-ordinator:<br><input type='text' value='$c' placeholder='Company Coordinator' required='required' name='cc' title='Enter name of company coordinator' class='input2'>

  <br>  <br>  
 Gender:$g<br> 
<select class='input2' name='gender' required='required' title='Please Select Your Gender'>
<option value='----Select_Occupation-------'>--------Select_Gender---------</option>
<option value='Male'>Male</option>
<option value='Female'>Female</option>
<option value='Both'>Both</option> </select>


<br><br>State:<br><input type='text'   placeholder='State' required='required'  name='state' title='Enter Your State' value='$s' class='input2'>
 <br><br>
 L.G.A:<br><input type='text'  placeholder='LGA' required='required'  name='lga' title='Enter Your Local government' value='$l' class='input2'>

<br>               <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Date Of Birth:$dl</span> <br> 
<select name='day' required='required' title='Please Select day of Birth' class='input' >
<option  value='Day'>Day</option>  ";
?>
<?php
    for($k=1;$k<=31;$k++){
     echo"<option value=$k>$k</option>";   
    }

echo"</select>";
               echo"        
              <select name='month'  required='required' title='Please Select month of Birth' class='input'>
               <option value='Month'>Month</option>
                        <option value='January'>January</option>
                           <option value='February'>February</option>
                             <option value='March'>March</option>
                            <option value='April'>April</option>
                             <option value='May'>May</option>
                         <option value='June'>June</option>
                        <option value='July'>July</option>
                    <option value='September'>September</option>
                 <option value='October'>October</option>
                <option value='November'>November</option>
            <option value='December'>December</option>
        </select>
                                           
                <select name='year' required='required' title='Please Select Year of Birth' class='input'>
                     <option value='Year'>Year</option>  ";
                     ?>
                     <?php
    for($i=1900;$i<=2017;$i++){
     echo" <option value=$i>$i</option>";   
    }

     echo"                               </select>  </td></tr></table>                          
         <br>  <br> 
 <br><br> 
       <hr color='gray' > 
       
      

    
<br><center><input type='submit' value='Update' class='submit' name='submit'>&nbsp;&nbsp;&nbsp;&nbsp;<input type='reset' value='Clear' class='submit' ></center></form>

</fieldset> </div>
";    

 echo"
 <br>  <br>  <br>
<div id='fam'> <br>E-Log Book Copyright &copy; &nbsp;<script>document.write((d.getYear() + 1900)) ;</script>&nbsp;&nbsp;Elvins Joseph<br><br></div>
  ";    

   ?> 
</body>
</html>