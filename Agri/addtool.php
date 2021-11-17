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
                background-size: 100%;
                background-attachment: fixed;  
            }
		
		div{
			background-color:yellow;
			height:45%;
			width:65%;
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
    
     
    <center>
	<br> <br> <br> <br>
  <div class="container" style="background-color:rgba(0,0,0,0.5); font-family:arial;" >
  
  <form action="" method="POST" enctype="multipart/form-data">
  
   <font color ="#ccff00" ><h2><u>ADD TOOLS</u></h2>   
	  <table  border="0" width="590" height="50"> 
	 
	 
	
	<tr> 
	<td>  <label for="lname">NAME</label></td>
	<td colspan="3"> <input type="text" id="mne" name="name"  placeholder="Name of the Tool" style="width:100%;" required /><br></td>
	</tr>
	
	<tr> 
	<td>  <label for="lname">PHOTO</label></td>
	<td colspan="3"> <input type="file" name="image" style="border:1px; height:25px; width:100%; background-color:#FFFFff;" required /> <br><br></td>
	</tr>
		
	<tr> 
	<td>  <label for="lname">BRAND</label></td>
	<td colspan="3" > <input type="text" id="DF" name="brand"  placeholder="Brand of the Tool" style="width:100%;"><br></td>
	</tr>
	
	
	<tr>
	<td>  <label for="name">INFORMATION</label></td>
		<td colspan="3">   <textarea rows="2" cols="50" name="info" placeholder="About the tool" required /></textarea><br></td>
	</tr>
	<tr> 
		<td><label for="lname">AMMOUNT</label></td>
		<td><div class="user"  style="height:38px; background-color:white; width:90%; background-size:10px 10px;  border-radius:100px; font-family:arial; background-color:#FFFFff;">
		<input type="number" id="usn" name="amt" dir="rtl" placeholder="MRP"  style="border:1px; height:25px; width:50%; background-color:#FFFFff;" required /><label><font color="red"><label> Rs </label></font></label>
		</div></td>
	    
		
		<td><label for="lname">WARRANTY</label></td>
		<td ><div class="user"  style="height:38px; background-color:white; width:90%; background-size:10px 10px;  border-radius:100px; font-family:arial; background-color:#FFFFff;">
		<input type="number" id="usn" name="wrnt" dir="rtl" placeholder="warranty"  style="border:1px; height:25px; width:65%; background-color:#FFFFff;"><font color="red"><label> Year</label></font></label>
		</div><br></td>
		
		
		
	</tr>
	

	<tr> 
		<td><label for="lname">POWER</label></td>
		<td><div class="user"  style="height:40px; background-color:white; width:90%; background-size:15px 10px;  border-radius:100px; font-family:arial; background-color:#FFFFff;">
		<input type="number" id="usn" name="pwr" dir="rtl" placeholder="power"  style="border:2px; height:10px; width:45%; background-color:#FFFFff;" >
		
		<form action="/cgi-bin/dropdown.cgi" method="post">
            <select name="unit" style="border:2px; height:34px; width:45%; background-color:#FFFFff;">
             <option value="HP" selected>HP</option>
			  <option value="RPM">RPM</option>
			   <option value="KW">KW</option>
			  </select>
		</form>
		
		</div><br></td>
	
		<td><label for="lname">COLOR</label></td>
		<td><div class="user"  style="height:38px; background-color:white; width:90%; background-size:10px 10px;  border-radius:100px; font-family:arial; background-color:#FFFFff;">
		
		<input type="text" id="usn" name="clr"  placeholder="Color"  style="border:1px; height:25px; width:100%; background-color:#FFFFff;">
		
		
		
		</div><br></td>
	</tr>
	
	<tr> 
	<td>  <label for="lname">FUEL</label></td>
	<td > <input type="text" id="mne" name="fuel"  placeholder="eg : petrol,disel" style="width:90%;"><br></td>
	<td>  <label for="lname">SELLER CONTACT</label></td>
	<td > <input type="number" id="mne" name="spno"  placeholder="contact number" style="width:90%;"><br></td>
	</tr>
	
	
	
	
		<tr> 
		
			<td colspan="3"><label for="lname">AVILABLE IN ONLINE : &nbsp&nbsp
			<input type="checkbox" name="checked" id="hii" style="position:absolute;  height:18px;  width:18px; background-color:red"/></label></td>
			
	   </tr>
	
	
	
</table>
 <br><input type="submit" value="ADD TOOL" width="100%" name="edit" style="border-radius:0px; background-color: red;color: white;"/>
  </form>

            <br><br><link><TYPE="button" VALUE="Back" onClick="history.go(-1);"><font color=yellow>Back</font></input></link>
            
</div>     
    </center>
    
    <?php 
		if(isset($_POST['edit'])){
			
		   	   include "init.php";
	  
			   $check = getimagesize($_FILES["image"]["tmp_name"]);
		 if($check !== false){
			   $image = $_FILES['image']['tmp_name'];
			   $imgContent = addslashes(file_get_contents($image));
				
			   session_start();
			   $aid = $_SESSION['login_user'];
  
			   $dataTime = date("Y-m-d H:i:s");
			   
			   $lname = $_POST['name'];
			   $info = $_POST['info'];
			   $amt  = $_POST['amt'];
			   
			   $spno = $_POST['spno'];
			   
			   $go = (isset($_POST['checked']) ) ? 1 : 0;
			   
			   $lcolor = $_POST['clr'];
			   $wrnt = $_POST['wrnt'];
			   $lbrand  = $_POST['brand'];
			
			   $lfuel = $_POST['fuel'];
			   $pwr  = $_POST['pwr'];
			   $unit = $_POST['unit'];
			   
				$name = strtoupper($lname);
			    $color = strtoupper($lcolor);
				$brand = strtoupper($lbrand);
				$fuel =strtoupper($lfuel);
	  
              $insert = $con->query("INSERT into agritools  VALUES ('','$aid','$name','$amt','$dataTime','$info','$imgContent','$brand','$color',' $fuel','$pwr $unit','$wrnt','$go','$spno')");
			   
			   if($insert){
				   
				   ?> 
					<script>
						alert("Tool Edited Successfully");
						window.location="advtool.php?pass=agritools";
					</script>
					
				   <?php
					
			  }else{
					?> 
					<script>
						alert("Tool Edition failed");
					</script>
				   <?php
			  } 
		}else{
				?> 
					<script>
						alert("Please select the image");
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
