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
			background-color:yellow;
			height:550px;
			width:45%;
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

        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>
     <br><br>
  <?php 
  require "init.php";
  session_start();
  $cosn= $_SESSION['login_user'];
  $pron=$_GET['try'];
  
   $da="select * from vegsel  where  s_id = $pron";			
  $resul=mysqli_query($con,$da);
  $ro = mysqli_fetch_assoc($resul);
  
  $fid=$ro['for_id']; 
  $pna=$ro['pro_name'];
  
  $sql="select * from former  where  for_id='$fid'";			
  $resul=mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($resul);
  $fid=$row["for_id"];
  $formn=$row["for_name"];
  
  ?>   
    <center>
	
  <div class="container" id="onl" style="background-color:rgba(0,0,0,0.5); font-family:arial;" ><br>
  <form action="" method="POST">
    <font color ="pink">
	<table border="0" width="50%">
	<tr><td colspan="2"><center><h2>CONFIRM YOUR ORDER</h2></center></td></tr>
	<tr>
    <td><label for="pname">PRODUCT  : </td><td></label><input type="text" id="usn" name="a" value="<?php echo $pna; ?>" readOnly style="width:250px; background-color:white;"></td><br>
	</tr>
	<tr>
	<td><label for="pname">COSTEMER-ID : </td><td></label><input type="text" id="usn" name="b" value="<?php echo $cosn; ?>" readOnly style="width:250px; background-color:white;"></td><br>
	</tr>
	<tr>
	<td><label for="pname">FARMER_NAME:</td><td></label><input type="text" id="usn" name="c" value="<?php echo $formn; ?>" readOnly style="width:250px; background-color:white;"></td><br>
	</tr>
	<tr>
	<td><label for="pname">WAIGHT   :</td><td></label>
	
	<div class="user"  style="height:38px; background-color:white; width:250px; background-size:10px 10px;  border-radius:100px; font-family:arial; background-color:white;">
	<input type="number" id="usn" name="d"  placeholder="" style="border:1px; height:25px; width:50%; background-color:#FFFFff;" required /><label><font color="red">Kg</font></label>
	</div>
	
	</td><br>
	</tr>
	
	
	
	 </table>
	<br> ( 50Rs will addes as a shipping price to every product !!! )
	  <input type="hidden" id="usn" name="e" value="<?php echo "$fid"; ?>" style="width:0px; height:0px; background-color:rgba(0,0,0,0); border:0px">  
	    <input type="hidden" id="usn" name="ooi" value="<?php echo $pron; ?>" style="width:0px; height:0px; background-color:rgba(0,0,0,0); border:0px"> 
	 <br> 
	 <br> 
	 <input type="submit" value="CASH ON DELIVERY"  name="con" style="width:150px; border-radius:8px; background-color:red;"/>
	  <input type="submit" value="PAY-ONLINE"  name="online" style="width:150px; border-radius:8px; background-color:red;"/>
	   </form>
	  <br><br><a href="buyp1.php?pass=PRODUCTS" ><font color="yellow">Cancel</font></a>
</div>   

  
    </center>
    
    <?php 
	if(isset($_POST['con'])){
include "init.php";

   $cosn= $_SESSION['login_user'];
   $fid=$_POST['e'];
   $pron=$_POST['a'];
   $wt=$_POST['d'];
    $pron=$_POST['ooi'];
   
						date_default_timezone_set('Asia/Kolkata');
   					    $date = date('Y/m/d h:i:s a', time());
						
 
  $lwt=$ro['weight'];
  $amt=$ro['amount'];
  
  if($wt>$lwt){
	  
	  
	      ?>
		 <script>
		 alert("Larger than the available product");
		  window.location="conbuy.php?try=<?php echo $pron ?>";
		 </script>
		 <?php
	  
	 
  }else{
	 if($wt<=29){
		 ?>
		 <script>
		 alert("Minimum weight is 30 Kg");
		 window.location="conbuy.php?try=<?php echo $pron ?>";
		 </script>
		 <?php
	 }else{ 
	 
		 $finalrate = ($wt*$amt)+50;
		 $rta = $wt*$amt;
		 $leftwt = $lwt - $wt;
		 $upl = "insert into cosform(cos_id,for_id,pro_name,waight,amount,date,status)values ('$cosn','$fid','$pna','$wt','$finalrate','$date','N')";
		 if(mysqli_query($con,$upl))
		 {
		 $upt="update vegsel set weight='$leftwt' where s_id=$pron";
		  if(mysqli_query($con,$upt))
			{
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
        <a class="close" href="probuylist.php">&times;</a>
        <div class="content">
            <font color="black"><?php echo nl2br("<b>$pna \n\n Weight = $wt Kg \n\n Amount ($wt*$amt) = $rta Rs\n\n Tax = 50 Rs \n\n <hr>Total Amount = $finalrate </b>") ?></font>
        </div>
    </div>
</div>
			 

	
	<?php
			}
	 else{
		 ?>
			<script>
				alert("error");
			</script>
		 <?php
	 }
		 }else{
			$status = "failed";
		 }
	 }
  }
	}

	if(isset($_POST['online'])){
		$wt = $_POST['d'];
		$sid= $_POST['ooi'];
		
		$lwt=$ro['weight'];
		 $amt=$ro['amount'];
		if($wt>$lwt){
	  
	  
	      ?>
		 <script>
		 alert("Larger than the available product");
		 window.location="buyp1.php?pass=PRODUCTS";
		 </script>
		 <?php
	  
	 
  }else{
	 if($wt<=29){
		 ?>
		 <script>
		 alert("Minimum weight is 30 Kg");
		 window.location="conbuy.php";
		 </script>
		 <?php
	 }else{ 
	 
		 $finalrate = ($wt*$amt)+50;
		 $leftwt = $lwt - $wt;
	 }
		?>
			<script>
				window.location="onlinepay.php?pass0=<?php echo $wt; ?>&pass1=<?php echo  $finalrate; ?>&pass2=<?php echo $sid; ?>&pass3=<?php echo $leftwt; ?>";
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
