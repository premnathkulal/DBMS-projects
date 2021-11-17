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
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>
    
     
    <center>
	<br> <br> <br> <br><br> <br><br>
  <div class="container" style="background-color:rgba(0,0,0,0.5); width:44%; height:55%; font-family:arial;" >
  
  <form action="" method="POST" enctype="multipart/form-data">
  
   <font color ="#ccff00" ><h2><u>ADD PRODUCT</u></h2>   
	  <table  border="0" width="590" height="50"> 
	 
	 
	
	<tr> 
	<td>  <label for="lname">NAME</label></td>
	<td colspan="3"> <input type="text" id="mne" name="name"  placeholder="Name of the product" style="width:100%;"><br></td>
	</tr>
	
	<tr> 
	<td>  <label for="lname">PHOTO</label></td>
	<td colspan="3"> <input type="file" name="image" style="border:1px; height:25px; width:100%; background-color:#FFFFff;" required/> <br><br></td>
	</tr>
		
	
	<tr> 
		<td><label for="lname">MIN-PRICE</label></td>
		<td><div class="user"  style="height:38px; background-color:white; width:90%; background-size:10px 10px;  border-radius:100px; font-family:arial; background-color:#FFFFff;">
		<input type="text" id="usn" name="min" dir="rtl" placeholder="MIN"  style="border:1px; height:25px; width:50%; background-color:#FFFFff;"><label><font color="red"><label> Rs </label></font></label>
		</div></td>
	    
		
		<td><label for="lname">MAX-PRICE</label></td>
		<td ><div class="user"  style="height:38px; background-color:white; width:90%; background-size:10px 10px;  border-radius:100px; font-family:arial; background-color:#FFFFff;">
		<input type="text" id="usn" name="max" dir="rtl" placeholder="MAX"  style="border:1px; height:25px; width:50%; background-color:#FFFFff;"><font color="red"><label> Year</label></font></label>
		</div><br></td>
		
		
		
	</tr>

</table>
 <br><input type="submit" value="ADD PRODUCT" width="100%" name="add" style="border-radius:0px; background-color: red;color: white;"/>
  </form>

            <br><br><link><TYPE="button" VALUE="Back" onClick="history.go(-1);"><font color=yellow>Back</font></input></link>
            
</div>     
    </center>
    
    <?php 
		if(isset($_POST['add'])){
			
		   	   include "init.php";
	  
			   $check = getimagesize($_FILES["image"]["tmp_name"]);
		 if($check !== false){
			   $image = $_FILES['image']['tmp_name'];
			   $imgContent = addslashes(file_get_contents($image));
				
			   session_start();
			   $aid = $_SESSION['login_user'];
 
			   $name = $_POST['name'];
			   $min  = $_POST['min'];
			   $max = $_POST['max'];

              $insert = $con->query("INSERT into products  VALUES ('','$name','$imgContent','$min','$max')");
			   
			   if($insert){
				   
				   ?> 
					<script>
						alert("Product Added Successfully");
						window.location="updaterate.php";
					</script>
					
				   <?php
					
			  }else{
					?> 
					<script>
						alert("Product Edition failed");
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
