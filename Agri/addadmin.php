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
  <div class="container" style="background-color:rgba(0,0,0,0.4);   border-radius:0px; padding: 38px 135px; font-family:arial; transform:translateY(5%); height:520px;">
  <form action="" method="POST">

     
    <h3><font color=yellow><u>ADD ADMIN</u><br></h3>
    <label for="lname">E-MAIL ID</label>
	
	<div class="user"  style="height:45px; border-radius:100px; background-color:white;  background-position:left center; background-size:30px 30px; background-repeat:no-repeat; font-family:arial; background-color:#FFFF99;">	
   <input type="text" id="usn" name="uname" placeholder="Enter E-MAIL ADRESS" style="border:1px; height:25px; width:350px; background-color:#FFFF99;"><br>
	</div>
	<br>
    <label for="passwrd">ENTER PASSWORD</label><br>
	<div class="user"  style="height:45px; background-color:white;border-radius:100px;  background-position:left center; background-size:30px 30px; background-repeat:no-repeat; font-family:arial; background-color:#FFFF99;">	
	<input type="password" id="passwrd" name="passwrd" placeholder="Enter password" style="border:1px; height:25px; width:350px; background-color:#FFFF99;">	
        </div>	<br>
		
		<label for="lname">NAME</label>
	
	<div class="user"  style="height:45px; border-radius:100px; background-color:white;  background-position:left center; background-size:30px 30px; background-repeat:no-repeat; font-family:arial; background-color:#FFFF99;">	
   <input type="text" id="usn" name="name" placeholder="Enter name here" style="border:1px; height:25px; width:350px; background-color:#FFFF99;"><br>
	</div>	<br>
	<label for="lname">STATE</label>
	
	<div class="user"  style="height:45px; border-radius:100px;  background-position:left center; background-size:30px 30px; background-repeat:no-repeat; font-family:arial; background-color:#FFFF99;">	
  
            <select name="state" style="background-color:#FFFF99; border:none; width:350px; height:35px;">
             <option value="Karnataka" selected>Karnataka</option>
			  <option value="Gujrath">Gujrath</option>
			   <option value="Panjab">Panjab</option>
			    <option value="Rajasthana">Rajasthana</option>
				 <option value="Kerala">Kerala</option>
				  <option value="Tamilnadu">Tamilnadu</option>
				   <option value="Andrapradesh">Andrapradesh</option>
				    <option value="Uttara pradesh">Uttara pradesh</option>
            </select>
			<br>
	</div>
	<br>	
	<label for="lname">MAKE SUPER USER</label>
	
	<div class="user"  style="height:45px; border-radius:100px; background-color:white;  background-position:left center; background-size:30px 30px; background-repeat:no-repeat; font-family:arial; background-color:#FFFF99;">	
  
            <select name="susr" style="background-color:#FFFF99; border:none; width:350px; height:35px;">
             <option value="NO" selected>NO</option>
			  <option value="YES">YES</option>
			  
            </select>
			<br>
	</div>
	<br>
        <input type="submit" name="add" value="ADD" style="width:50%; background:red;"/><br>
		  
	<br>
		<link><a href="AdminLogin.php"><font color=yellow>Cancel</font></a></link>
  </form>
</div>     
    </center>
    
    <?php 
		if(isset($_REQUEST['add']))
    {
	  require "init.php";
      $un=$_POST['uname'];
	  $pass=$_POST['passwrd'];
	  $nm=$_POST['name'];
	  $state=$_POST['state'];
	  $sad=$_POST['susr'];
	  $sql="insert into admin values('$un','$sad','$pass','$nm','$state')";
	   if(mysqli_query($con,$sql)){
		   $status = "ok";
		   ?><script>
				alert("Admin Scucessfully added");
				window.location="addadmin.php" ;
		     </script>
		  <?php
	   }else{
		   ?> <script>
				alert("Email may be already exist");
				window.location="addadmin.php" ;
		     </script>
		<?php
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
