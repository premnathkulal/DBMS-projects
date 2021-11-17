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
		
			#onl{
				background-color:white;
				height:450px;
				width:550px;
				border:4px solid red;
				font-family:arial;
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
input[type=submit] {
    background-color: #4ffF50;
    color: white;
    padding: 9px 10px;
    border: none;
    width:95%;
    border-radius: 15px;
    cursor: pointer;
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

			
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>
     <br><br><br><br><br>
  <?php 
  require "init.php";
  session_start();
  $cosi= $_SESSION['login_user'];
  
  ?>   
    <center>
	
 <div id="onl" >
   <br>
   <table border="0"  height="400" width="500px">
	<form action="" method="POST">
  <tr>
	   <td colspan="2" height="50">
	   <center><b>ACCEPTED CARDS</b></center><BR>
	  <center> <img src="img/logo/cards.jpg" width="500px" height="60px"/> </center> 
	   
	   </td>
      
  </tr>
    <tr>
	   <td>TOTAL AMMOUNT :</td>
       <td><center><input type="text"  value="<?php  $amt = $_REQUEST['pass1']; echo $amt; ?>" readonly STYLE="BORDER:1px solid red; color:red;"></CENTER></td>
  </tr>
  <tr>
	   <td>CARRD NO :</td>
       <td><center><input type="text" name="cno" placeholder="XXXX-XXXX-XXXX-XXXX"  required pattern="[0-9]{16}" STYLE="BORDER:1px solid grey;" required /></CENTER></td>
  </tr>
  
  <tr>
	  <td>CVV : </td>
      <td><center><input type="number" name="cvv" placeholder="XXXX" STYLE="BORDER:1px solid grey;" required/></CENTER></td>
  </tr> 
  
  <tr>
	  <td width="150">EXPIRY DATE : </td>  
	  <td><center><input type="date" name="edt" style="width:95%; border-radius:15px; height:35px; border:1px solid grey;" required//></CENTER></td>
  </tr>

	
  <tr>
	  <td colspan="2" height="40">
		<br><center><input type="submit" value="CONFIRM" name="conf" STYLE="width:50%;"/><br><br>
		
			<link><TYPE="button" VALUE="Back" onClick="history.go(-1);"><font color="blue">Back</font></input></link>		
			
		</center>
	  </td>
  <tr>
    </form>
   </table>
</div>   


    </center>
	
    <?php
			if(isset($_POST['conf'])){
			  include "init.php";
			  $wt = $_REQUEST['pass0']; 
			  $amt = $_REQUEST['pass1']; 
			  $sid = $_REQUEST['pass2']; 
			  $lw = $_REQUEST['pass3']; 
			  $cosi= $_SESSION['login_user'];
			  $rta = $amt-50;	
			  $at = round($amt/$wt)-1;
						date_default_timezone_set('Asia/Kolkata');
   					    $date = date('Y/m/d h:i:s a', time());
			 
    		  $sql = "select * from vegsel where s_id=$sid";
			  $res=mysqli_query($con,$sql);
			  $row = mysqli_fetch_assoc($res);
			  $fid = $row['for_id'];
			  $pna = $row['pro_name'];
			
			  $cno = $_POST['cno'];
			  $cvv = $_POST['cvv'];
			  $edt = $_POST['edt'];
			  
			  $upl = "insert into cosform(cos_id,for_id,pro_name,waight,amount,date,status,card_no,exp_date,cvv)values ('$cosi','$fid','$pna','$wt','$amt','$date','N','$cno','$edt','$cvv')";
			  $r=mysqli_query($con,$upl);
			  if($r){
				  $upt="update vegsel set weight='$lw' where s_id=$sid";
		  if(mysqli_query($con,$upt)){
				  ?>
			 
			 		<div class="box">
    <a class="button" href="#popup1" id="modal"></a>
</div>
<script type="text/javascript">
document.getElementById("modal").click();
</script>
				<div id="popup1" class="overlay">
    <div class="popup">
        <h2>PAYMENT SUCCESSFUL !!! <BR> </H2><H3>THANK YOU FOR SHOPING</h3>
        <a class="close" href="probuylist.php">&times;</a>
        <div class="content">
            <font color="black"><?php echo nl2br("<b>$pna  $wt Kg \n\n Amount ($wt*$at) = $rta Rs\n\n Tax = 50 Rs \n\n <hr>Total Amount $amt <hr>\nCARD NO : $cno \n\nCVV : $cvv \n\n EXPIRY-DATE : $edt \n</b> \n(* Keep the screen shot of this page for reference )") ?></font>
        </div>
    </div>
</div>
			 

	
	<?php
		
		  }
			  }else{
				  ?>
				  <script>
				      alert("no");
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
