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
        
      
        <style>
            body {
				background-image:url(img/back/loginBack.jpg);
                background-size: 100%;
                background-attachment: fixed;  
            }
		input[type=text], select, textarea {
    width: 95%; /* Full width */
    padding: 10px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 15px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
input[type=password], select, textarea {
    width: 95%; /* Full width */
    padding: 10px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 15px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4ffF50;
    color: white;
    padding: 9px 10px;
    border: none;
    width:95%;
    border-radius: 15px;
    cursor: pointer;
}


/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45ff49;
  
}

/* Add a background color and some padding around the form */


.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
input[type=number]{
    width: 100%; /* Full width */
    padding: 10px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 25px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
			
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>
   
	 
  <?php 
  require "init.php";
  session_start();
  
  $fid= $_SESSION['login_user'];  
  
  $tid=$_REQUEST['requ'];

 
  $sql="select * from agritools  where  tool_id='$tid'";	
  
  $resul=mysqli_query($con,$sql);
  $ro = mysqli_fetch_assoc($resul);
  
  $pname=$ro["name"];
  $amt=$ro["ammount"];
  
  ?>   
    <center>
	
 <div class="container" style="background-color:rgba(0,0,0,.5); height:550px; width:580px; borde-radius:0px; font-family:arial; transform:translateY(3%);" >
  <form action="" method="POST" style="width:100%; height:100%; transform:translateY(-8%);">
    <font color ="pink" >
	
	<table border="0">
	<TR><td colspan="3" style="width:5px"><center><BR><h3><u>CONFIRM YOUR ORDER</u></h3></BR><center></td></TR>
	<tr>
    <td><label for="pname">PRODUCT NAME : </td><td></label>
	<input type="text" id="usn" name="a" value="<?php echo "$pname"; ?>" readOnly style="width:250px; background-color:white;"></td><br>
	</tr>
	<tr>
	<td><label for="pname">FARMER-ID : </td><td></label><input type="text" id="usn" name="fffid" value="<?php echo "$fid"; ?>" readOnly style="width:250px; background-color:white;"></td><br>
	</tr>
	<tr>
	<td><input type="HIDDEN" id="usn" name="tttid" value="<?php echo "$tid"; ?>" readOnly ></td><br>
	</tr>
	<tr>
	<td><label for="pname">AMMOUNT   :</td><td></label>
	
	<div class="user"  style="height:38px; background-color:white; width:250px; background-size:10px 10px;  border-radius:100px; font-family:arial; ">
	<input type="text" id="usn" name="amtoo"  READONLY value="<?php echo "$amt"; ?>" style="border:1px; height:25px; width:50%; background-color:white;"><label><font color="red">per Piece</font></label>
	</div>
	
	</td><br>
	</tr>
	
		<tr>
	<td><label for="pname">NO OF PIECE   :</td><td></label>
	
	<br><div class="user"  style="height:38px; background-color:white; width:250px; background-size:10px 10px;  border-radius:100px; font-family:arial; ">
	<input type="number" id="usn" name="pie" style="border:1px; height:25px; width:50%; background-color:white;" required><label><font color="red">Piece</font></label>
	</div>
	
	</td><br>
	</tr>
	
	
	 </table>
	<br> ( 250Rs will addes as a shipping price to every product !!! )
	  <input type="text" id="usn" name="e" value="<?php echo "$forn"; ?>" style="width:0px; height:0px; background-color:rgba(0,0,0,0); border:0px">  
	 <br> <input type="submit" value="Confirm" name="ok" style="width:200px; border-radius:8px; background-color:red;"/>
	   </form>
	  <br><br><a href="toollist.php?pass=agritools" ><font color="yellow">Cancel</font></a>
</div>   

  
    </center>
    
 <?php
	if(isset($_POST['ok'])){
		include "init.php";
		
		$foid = $_POST['fffid'];
		$toid = $_POST['tttid'];
		$amt = $_POST['amtoo'];
		$pn = $_POST['a'];
		$pie = $_POST['pie'];
		
		if($pie <= 0){
			?>
			<script>
			
				alert("NO OF PIECE SHOULD BE MORE THAN 0");
				
			</script>
			<?php
		}else{
		$famt = ($pie*$amt)+250;
		$rta = $pie*$amt;
		
		date_default_timezone_set('Asia/Kolkata');
   			 $date = date('Y/m/d h:i:s a', time());
			 
			
			 $sql="insert into toolbuy values('','$foid','$toid','$famt','$date','N','$pie')";
			
			 if(mysqli_query($con,$sql)){
			 ?>
			 
						<div class="box">
				<a class="button" href="#popup1" id="modal"></a>
			</div>
			<script type="text/javascript">
			document.getElementById("modal").click();
			</script>
				<div id="popup1" class="overlay">
				<div class="popup">
					<h2>THANK YOU FOR SHOPING</h2>
					<a class="close" href="toolcart.php?pass=agritools">&times;</a>
					<div class="content">
						<font color="black"><?php echo nl2br("<b>$pn \n\n Amount ($pie*$amt) = $rta Rs\n\n Tax = 250 Rs \n\n <hr>Total Amount = $famt </b>") ?></font>
					</div>
				</div>
			</div>
			 
			
				
	          <?php
			
			}else{
				?>
				<script>
					alert("Error");
					window.location="toollist.php?pass=agritools";	
				</script>
				<?php
			}
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
