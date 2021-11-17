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
        <link rel="stylesheet" href="css/rigis.css">
      
        <style>
            body {
				background-image:url(img/back/loginBack.jpg);
                background-size: 100%;
                background-attachment: fixed;  
            }
		
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>
    
     
    <center>
  <div class="container" style="background-color:rgba(0,0,0,0.4);   border-radius:0px; padding: 45px 15px; font-family:arial; transform:translateY(30%);">
  <form action=""method="POST">
   <font color=yellow>
   <h3><B><u>RESET PASSWORD</u></B><br></h3>
    <label for="lname">ENTER USERNAME</label>
	<div class="user"  style="height:43px; background-color:white; background-image:url(img/louname.png); background-position:left center; background-size:30px 30px; background-repeat:no-repeat; border-radius:100px;font-family:arial; background-color:#FFFF99;">
   <input type="text" id="usn" name="uname" placeholder="Enter your username here" style="border:1px; height:35px; width:350px; background-color:#FFFF99;"><br>
	</div>
	<br>
    <label for="passwrd">ENTER YOUR PHONE NUMBER</label><BR>
	<div class="user"  style="height:43px; background-color:white;border-radius:100px; background-image:url(img/pass.png); background-position:left center; background-size:30px 30px; background-repeat:no-repeat; font-family:arial; background-color:#FFFF99;">
<input type="text" id="pno" name="pno" placeholder="Enter phone number" style="border:1px; height:35px; width:350px; background-color:#FFFF99;">	
      
	</div>
		<br>
	
	<label for="passwrd">SELECT YOUR ROLE</label><BR>

	<div class="user"  style="height:43px; background-color:white;border-radius:100px; background-image:url(img/pass.png); background-position:left center; background-size:30px 30px; background-repeat:no-repeat; font-family:arial; background-color:#FFFF99;">
		<form action="/cgi-bin/dropdown.cgi" method="post">
				<select name="role" style="border:1px; height:33px; width:350px; background-color:#FFFF99;">
				<option value="Farmer" selected>Farmer</option>
				<option value="Customer">Customer</option>
				
            </select>
			</FORM>     
	</div>
	<BR>
	<input type="submit"  value="SUBMIT" name="btn" style="width:50%; background:red;"/>

	<br><br>
	
		<link><TYPE="button" VALUE="Back" onClick="history.go(-1);"><font color=yellow>Back</font></input></link>
  </form>
</div>     
  </center>
    
<?php
     if(isset($_POST['btn']))
    {
	  require "init.php";
      $uname=$_POST['uname'];
	  $pno=$_POST['pno'];
	  $role=$_POST['role'];
	  if($role == "Farmer"){
		  $sql="select * from former where for_id='$uname' and f_phno = $pno";
		  echo $uname;
		  echo $pno;
	  }else{
		  $sql="select * from costemer where cos_id='$uname' and c_phno = $pno";
	  }
	  $result=mysqli_query($con,$sql);
	  if(mysqli_num_rows($result)>0){

				session_start();
				$_SESSION['uname']=$uname; 
				$_SESSION['role']=$role;
				header("location:reset.php");
			
	  }else{ ?>
		  <script>
			alert("Data is incorrect");
		  </script>
	  <?php 
		echo("<meta http-equiv='refresh' content='0'>"); 
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
