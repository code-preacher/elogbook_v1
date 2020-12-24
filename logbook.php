 <!DOCTYPE HTML>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<meta http-equiv='Lang' content='en'>
<title>Elog_Book_logbook</title>
<style type='text/css'>
.sam2{ padding:1px;    color:rgb(204,204,205);  font-size:16;
float:right;     position:relative;
}
.input2{
height:38px; color:black; width:550px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative;
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
.main2{background:url(img/b.jpg); color:#0F7ACC; font-size:16; height:1200px; width:780px;  border:1px solid gray;box-shadow: -2px 10px 30px #000;
margin:auto; border-radius:0px 0px 25px 25px; padding:17px;  position:relative; font-family: comic sans ms; 
}
#fam{ background:#0F7ACC; width:100%; height:auto; text-align:center; color:white; font-size:12px; font-weight:bolder;font-family: comic sans ms;  }

</style>
<script language='JavaScript'>
<!-- hide
d= new Date();
/**document.write('Time: ' + now.getHours() + ':' + now.getMinutes() + '<br>');
document.write('Date: ' + (now.getMonth() + 1) + '/' + now.getDate() + '/' +
(1900 + now.getYear()));**/
// -->
</script>


</head>

<body>

<div class='main2'>
<div style='background:#f2f2f2; color:#0F7ACC; text-align:center; width:775px; height:30px; font-family:comic sans ms;'>
...........................................Please fill all required information correctly ................................</div><br>

<form action='logbookdet.php' method='post' enctype='multipart/form-data'>
<table style='color:#0F7ACC;font-family:comic sans ms; border: 1px solid gray;' border='1' >
  <tr><td>Day</td><td>Description Of Work
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>MONDAY:</td><td><textarea row='20' col='50' reqired='required' name='md1'  class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>TUESDAY:</td><td><textarea row='20' col='50' name='td2' reqired='required' class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>WEDNESDAY:</td><td><textarea row='20' col='50' name='wd3' reqired='required' class='input2'> </textarea>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>THURSDAY:</td><td><textarea row='20' col='50' name='td4' reqired='required' class='input2'> </textarea>
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
       <hr color='gray' > 
       
      

    
<br><center><input type='submit' value='Report' class='submit' name='submit'>&nbsp;&nbsp;&nbsp;&nbsp;<input type='reset' value='Clear' class='submit' ></center></form>



  </center>   </div> 
      <br>  <br>  <br>           <br>  <br>  <br>
<div id='fam'> <br>E-Log Book Copyright &copy; &nbsp;<script>document.write((d.getYear() + 1900)) ;</script>&nbsp;&nbsp;Elvins Joseph<br><br></div>
      


</body>
</html>
