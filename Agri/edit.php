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
				background-image:url(img/BACK/loginBack.jpg);
                background-size: 100%;
                background-attachment: fixed;  
            }
		
		div{
			
			height:45%;
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
	 
	 include "init.php";
	 $id = $_REQUEST['id']; 
	 $sql = "select * from vegsel where s_id = '$id'";
	 $result = mysqli_query($con,$sql);
	 $ro = mysqli_fetch_assoc($result);
		 $a = $ro['pro_type'];
		 $b = $ro['quality'];
		 $c = $ro['weight'];
		 $d = $ro['amount'];
	 
	 ?>
    <center>
	<br> <br> <br> <br> 
  <div class="container" style="background-color:rgba(0,0,0,0.5); font-family:arial;" >
  <form action="" method="POST">
   <font color ="#ccff00"><h2><u>UPDATE YOUR PRODUCTS</u></h2>   
	  <table  width="530" height="50"> 
	
	<tr>
  <td>  <label for="name">TYPE</label></td>
 <td>   <input type="text" name="type" value="<?php echo $a; ?>" placeholder="Enter the type of your product"></textarea><br></td>
 </tr>
 
<tr>
  <td>  <label for="name">QUALITY</label></td>
 <td>   <textarea rows="5" cols="50" name="quality" value="<?php echo $b; ?>" placeholder="Enter about your product"></textarea><br></td>
 </tr>
 


<tr> 

    <td> <label for="lname">WEIGHT</label></td>
   <td> <div class="user"  style="height:38px; background-color:white; width:50%; background-size:10px 10px;  border-radius:100px; font-family:arial; background-color:#FFFFff;">
   <input type="number" value="<?php echo $c; ?>" id="usn" name="wt"  placeholder="Weight" style="border:1px; height:25px; width:50%; background-color:#FFFFff;"><label><font color="red">Kg</font></label>
	</div>

</tr>

<tr>
   <td>  <br><br><label for="lname">AMMOUNT</label></td>
   <td> <div class="user"  style="height:38px; background-color:white; width:50%; background-size:10px 10px;  border-radius:100px; font-family:arial; background-color:#FFFFff;">
   <input type="number" id="usn" value="<?php echo $d; ?>" name="amt"  placeholder="Amount" style="border:1px; height:25px; width:50%; background-color:#FFFFff;"><label><font color="red"><label> Rs per Kg</label></font></label>
	</div><td>
 </tr>

   <style="width:20%;"><br>  		
</table>
  <br><input type="submit" value="Submit" name="submit_btn" width="100%" style=" background-color: red; border-radius:0px; color: white; padding: 8px 50px; border: none;  
  cursor: pointer;"/>
  </form>

            <br> <br> <a class="navbar-brand"href="mm.php" ><font color="sky blue">CANCEL</font></a>
</div>     
    </center>
    
	
<!-------------------------------php---------------------------------->
	
	
	
	
<?php	
	
	
if(isset($_POST['submit_btn'])){	
	
 require "init.php";
 
  $id = $_REQUEST['id']; 
  
 session_start();
 $user_name = $_SESSION['login_user'];
 

 $pqua = $_POST["quality"];
 $type = $_POST["type"];
 $wt = $_POST["wt"];
 $amt = $_POST["amt"];

						date_default_timezone_set('Asia/Kolkata');
   					    $date = date('Y/m/d h:i:s a', time());
						
 
 $sql="update vegsel set pro_type='$type',quality='$pqua',weight='$wt',amount='$amt',time='$date' where s_id = '$id'";
	
	 if(mysqli_query($con,$sql))
	 {
		 $status = "ok";
		 header( 'Location: mm.php' );
	 }
	 else{
		 $status = "failed";
	 }
 
  echo json_encode(array("reaction "=>$status));
  mysqli_close($con);
  	
}	
	
 ?>		
	
	
	
	
	
<!-------------------------------php---------------------------------->    
    
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
