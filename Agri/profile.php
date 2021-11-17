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
			#ko{
			background-color: #4ffF50;
			color:black;
			padding: 8px 50px;
			
			border-radius: 0px;
			cursor: pointer;
			}
			div{
				background-color:white;
				height:490px;
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
  $sql="select * from costemer  where  cos_id='$cosi'";			
  $resul=mysqli_query($con,$sql);
  $ro = mysqli_fetch_assoc($resul);
  $cosn=$ro["cos_name"];
  $city=$ro["c_city"];
  $state=$ro["c_state"];
  $pinc=$ro["c_pincode"];
  $phno=$ro["c_phno"];
  ?>   
    <center>
 <div >
   <br>
   <table border="0" height="80px" width="700px">
     <tr><td rowspan="10" width=200px>	<img src="img/logo/cusprof.png" width="280px" height="250px"/></td></tr>
  <tr><td colspan="2"><center><h2><font color="red">YOUR PROFILE</h2></CENTER></td></tr>
  
  <tr><td><center><img src="img/logo/user.png" height="50px" width="50px"/></td>
       <td><center><h3><font color="black"><?php echo "$cosn"; ?></CENTER></td>
  </tr>
  
  <tr><td><center><img src="img/logo/state.png" height="50px" width="50px"/></td>
      <td><center><h3><font color="black"><?php echo "$city"; ?></h2></CENTER></td>
  </tr> 
  
  <tr><td><center><img src="img/logo/city.svg" height="50px" width="50px"/></td>  
	  <td><center><h3><font color="black"><?php echo "$state"; ?></CENTER></td>
  </tr>
  
  <tr><td><center><img src="img/logo/pinc.png" height="50px" width="50px"/></td>
	  <td><center><h3><font color="black"><?php echo "$pinc"; ?></CENTER> </td>
  </tr>
  
  <tr><td><center><img src="img/logo/phone.png" height="50px" width="50px"/></td>
	  <td><center><h3><font color="black"><?php echo "$phno"; ?></CENTER></td>
  </tr>
  
	<tr><td colspan="2"><center><a href="CostemerLogin.php" id="ko">OK</a></center><br>
    <center><a href="editcusprof.php">Edit</a></center></dt></tr>
     </table>
</div>   

  
    </center>
    
    
    
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
