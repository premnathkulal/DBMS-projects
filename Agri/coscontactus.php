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
	<br> <br> <br> <br> 
  <div class="container" style="background-color:white; border-radius:15px; font-family:arial; width:800px; height:450px;" >
  <form action="" method="POST">
    <font color ="black" > <h2>CONTACT US</h2>   
	  <table  width="730" height="50"> 
	  	<tr>
	<td rowspan="4" width="200px">
		
			<img src="img/logo/cont.png" width="280px" height="250px"/>
	</td>
	</tr>
	
<tr>
 
 <td>   <textarea rows="15" cols="20" name="cmp" placeholder="Enter  your comments or feedback" style="border-radius:0px; background-color:rgba(0,0,0,0.1); border-radius:15px; border:0px;"></textarea><br></td>
 </tr>

<tr>
	<td>
			<center><input type="submit" value="Submit" name="ok"  style="width:50%";/></center>
	</td>
</tr>
<tr>
	<td>
			<br><center><a class="navbar-brand"href="CostemerLogin.php" >Cancel</a></center>
	</td>
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
	  $role = "CUSTEMER";
	  date_default_timezone_set('Asia/Kolkata');
   					    $date = date('Y/m/d', time());
 
$sql = "insert into request(uid,Role,Complent,Date) values('$fi','$role','$pn','$date');";
       
if ($con->query($sql) === TRUE) {
		?>
		<script>
		alert("Feedback sent \n We will reach you soon Through SMS");
		</script>
		<?php
		echo("<meta http-equiv='refresh' content='0'>");
 } 
 else {
    echo "Error deleting record: " . $con->error;
}
    }
	
?>   
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
