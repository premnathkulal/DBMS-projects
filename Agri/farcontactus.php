<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Agri_rigister</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/rei.css">
		
        <style>
            body {
				background-image:url(img/back/loginBack.jpg);
                background-size:100%;
                background-attachment: fixed;  
            }
		div{
			
			height:45%;
		}
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>
    
     
    <center>
	<br> <br> <br> <br> <br>
  <div class="container" style="background-color:white; border-radius:15px; font-family:arial; width:800px; height:450px;" >
  <form action="" method="POST">
   <font color ="black" ><b><h1>CONTACT US<b></h2>   
	  <table  width="730" border="0" height="50"> 
	  
	<tr>
	<td rowspan="4" width="200px">
		
			<img src="img/logo/cont.png" width="280px" height="250px"/>
	</td>
	</tr>
<tr>
 
 <td>   <textarea rows="15" cols="20" name="cmp" placeholder="Place for your complaints" style="border-radius:0px; background-color:rgba(0,0,0,0.1); border-radius:15px; border:0px;"required /></textarea><br></td>
 </tr>


   <tr> 		

				<td><center><input type="submit" value="Send" name="ok" style="width:50%";/></td>
	</tr>
	<tr>
			<td><center> <br><a class="navbar-brand"href="formerLogin.php"><font color="red">Cancel</font></a></td>
	</tr>
  </table>
  </form>
            
            
</div>     
    </center>
    
 <?php

     if(isset($_REQUEST['ok']))
    {
	require "init.php";
      $pn=$_POST['cmp'];
	  session_start();
	  $fi=$_SESSION['login_user'];
	  $role = "FARMER";
	  date_default_timezone_set('Asia/Kolkata');
   					    $date = date('Y/m/d', time());
 
$sql = "insert into request(uid,Role,Complent,Date) values('$fi','$role','$pn','$date');";
       
if ($con->query($sql) === TRUE) {
		?>
		<script>
		alert("Feedback sent \n We will reach you soon Through SMS");
		window.location="formerLogin.php"
		</script>
		<?php
 } 
 else {
    echo "Error deleting record: " . $con->error;
}
    }
	
?>   

<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	
	
    </body>
</html>
