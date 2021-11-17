
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
		
			div{
				background-color:WHITE;
				height:500px;
				width:55%;
				border-radius:15px;
			}
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>
     <br><br><br><br><br>
  <?php 
  require "init.php";
  session_start();
  $cosi= $_SESSION['login_user'];
  $sql="select * from costemer  where cos_id='$cosi'";			
  $resul=mysqli_query($con,$sql);
  $ro = mysqli_fetch_assoc($resul);
  $cosn=$ro["cos_name"];
  $city=$ro["c_city"];
  $state=$ro["c_state"];
  $pinc=$ro["c_pincode"];
  $phno=$ro["c_phno"];
  ?>   
    <center>
	
<form action="" method="POST">
 <div style="font-family:arial;">
   <br>
   <table border="0" height="70px" width="400px">
  <tr><td colspan="2"><center><h2><font color="RED"><u>UPDATE PROFILE</u></h2></CENTER></td></tr>
  
  <tr><td><center><img src="img/logo/user.png" height="50px" width="50px"/></td>
       <td><center>
	  <input type="text" value="<?php echo "$cosn"; ?>" name= "name"/>
	   </CENTER></td>
  </tr>
  
  <tr><td><center><img src="img/logo/state.png" height="50px" width="50px"/></td>
      <td><center>
	  <input type="text" value="<?php echo "$city"; ?>" name= "city"/>
	  </h2></CENTER></td>
  </tr> 
  
  <tr><td><center><img src="img/logo/city.svg" height="50px" width="50px"/></td>  
	  <td><center>
	  
	  
	  <form action="/cgi-bin/dropdown.cgi" method="post">
            <select name="state">
             <option value="<?php echo $state; ?>" selected><?php echo $state; ?></option>
			  <option value="Karnataka">Karnataka</option>
			  <option value="Gujrath">Gujrath</option>
			   <option value="Panjab">Panjab</option>
			    <option value="Rajasthana">Rajasthana</option>
				 <option value="Kerala">Kerala</option>
				  <option value="Tamilnadu">Tamilnadu</option>
				   <option value="Andrapradesh">Andrapradesh</option>
				    <option value="Uttara pradesh">Uttara pradesh</option>
            </select>
			</FORM>
	  </CENTER></td>
  </tr>
  
  <tr><td><center><img src="img/logo/pinc.png" height="50px" width="50px"/></td>
	  <td><center>
	   <input type="text" value="<?php echo "$pinc"; ?>" name= "pinc"/>
	   </CENTER> </td>
  </tr>
  <tr><td><center><img src="img/logo/phone.png" height="50px" width="50px"/></td>
	  <td><center><input type="text" value="<?php echo "$phno"; ?>" name= "pno"/></CENTER></td>
  </tr>
	
  <tr><td colspan="2">
  <center><input type="submit" name="update" value = "Update"style="width:80%; color:black"/></center><br>
  <center><a href="profile.php" >Cancel</a></center></td></tr>
     </table>
</div>   
</form>
  
    </center>
    
   <?php 
		if(isset($_POST['update'])){
			include "init.php";
			session_start();
			$uid = $_SESSION['login_user'];
			$name = $_POST['name'];
			$city = $_POST['city'];
			$state = $_POST['state'];
		
			$pic = $_POST['pinc'];
			$pno = $_POST['pno'];
			
			$sql = "update costemer set cos_name = '$name',c_state = '$state', c_city = '$city',c_pincode='$pic', c_phno = '$pno' where cos_id='$uid '";
			
				if(mysqli_query($con,$sql))
						{
								?> 
								<script>
									alert("Your profile is Successfully updated");
									window.location="profile.php";
								</script>
								<?php
							
						}
				else{
								$status = "failed";
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
