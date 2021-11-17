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
  <div class="container" style="background-color:rgba(0,0,0,0.4);   border-radius:0px; padding: 1px 10px; font-family:arial; transform:translateY(40%);">
  <form action="" method="POST">
  <br><br>
   <font color=yellow>
   <h3><B>RESET PASSWORD</B><br></h3>
    <label for="lname">SELECT THE NEW PASSWORD</label>
	<div class="user"  style="height:38px; background-color:white; background-image:url(img/louname.png); background-position:left center; background-size:30px 30px; background-repeat:no-repeat; border-radius:100px;font-family:arial; background-color:#FFFF99;">
   <input type="password" id="pa" name="p1" placeholder="Enter new password" style="border:1px; height:25px; width:350px; background-color:#FFFF99;"><br>
	</div>
	<br>
    <label for="passwrd">RE-ENTER THE PASSWORD</label><BR>
	<div class="user"  style="height:38px; background-color:white;border-radius:100px; background-image:url(img/pass.png); background-position:left center; background-size:30px 30px; background-repeat:no-repeat; font-family:arial; background-color:#FFFF99;">
<input type="PASSWORD" id="paa" name="p2" placeholder="Re-Enter password" style="border:1px; height:25px; width:350px; background-color:#FFFF99;">	
      
	</div>
	<BR>
	<input type="submit"  name="btn" value="RESET" style="width:50%; background:red;"/>

	<br><br>
	
		<link><a href="forgotpass.php"><font color=yellow>Back</font></a></link>
  </form>
</div>    
    </center>
    <?php
			
     if(isset($_POST['btn']))
    {
	  session_start();
      $uname = $_SESSION['uname'];
	  $role = $_SESSION['role'];
	  $bp = $role;
	  require "init.php";
      $p11=$_POST['p1'];
	  $p22=$_POST['p2'];
	  if($p11==$p22){
		  
		  if($role == "Farmer"){
				$sql="update former set passwrd='$p11' where for_id = '$uname'";
		  }else{
				$sql="update costemer set passwrd='$p11' where cos_id = '$uname'";
		  }
		  
		  $result=mysqli_query($con,$sql);
		  unset($_SESSION['uname']);
	      session_destroy();
		  ?>
		  <script>
			alert("Password Changed successfully ");
		  </script>
		  <?php if($bp=="Farmer"){ ?>
		  <script>
			window.location="FormerLogin.html";
		  </script>
		  <?php }else{?>
		  <script>
			window.location="CostemerLogin.html";
		  </script>
		
		  <?php }
	  }else{
		  ?>
		  <script>
			alert("Password wont match");
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
