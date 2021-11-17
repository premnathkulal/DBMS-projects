
 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/cssstyle.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<head>
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
		<META HTTP-EQUIV="Expires" CONTENT="-1">
		</head>
        <style>
      
               body {
				background-color:#FFCC66;
                background-size: 100%;
                background-attachment: fixed;  
            }
            
			table{
				 background:#FFFF99; 
				border-radius:16px;
			}
			input[type=submit] {
			background-color: #4ffF50;
			color: white;
			padding: 10px 10px;
			border: none;
			
			border-radius: 5px;
			cursor: pointer;
			}
			input[type=text] {
			background:rgba(0,0,0,0.0);
			color: black;
			padding: 10px 10px;
			border: none;
			width:98%;
			border-radius: 5px;
			cursor: pointer;
			}
			
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		</head>
    <body>
	  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:black;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-center" role="form">
		   <div class="form-group">
          
            <img src="img/logo/mic.png" width="100px" height="50px" />
            </div>
            <div class="form-group">  
             <a class="navbar-brand"href="formerLogin.php"><font color="#4ffF50">HOME</a>
            </div>
            <div class="form-group">
             <a class="navbar-brand" href="sell.html"><font color="#4ffF50">SELL</a>
            </div>
               
            
           
         
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
	<div style="position:fixed;left:80px;top:70px; color:red;" >
	  <div class="container" >
    <h1><Center><b><u>YOUR SELLINGS</u></CENTER></H1>

	</div>
	</div>
	
	
	<font color="black">
	
	<br><br><br><br><br><br><br>
        <?php
		$uoo = 0;
		$l=0;
require  "init.php";
 session_start();
  $user_name = $_SESSION['login_user'];
 $user_psw = $_SESSION['login_psw'];
 
		$sq="select * from vegsel where for_id='$user_name'";
		 $resul=mysqli_query($con,$sq);
     
     while($ro = $resul->fetch_assoc()){
			 
					$l=1;
				  $pn=$ro["pro_name"];
				  
					
				?>
				<form action="" method="POST">
		 <?php
	
		
?>	
     <div class="col-md-6" >
	 <br>
        <center><div> <table border="0px" width="550" height="250">
	    <tr>
		
		<?php
				
				$pkc="select * from products where pro_name='$pn'";
				$pkr=mysqli_query($con,$pkc);
				$vv = mysqli_fetch_assoc($pkr);
				$resp=$vv['pro_name'];
				
				
				
				 $qlt=$ro["quality"];	
				 $wt=$ro["weight"];
				 $amt=$ro["amount"];
				 $tm=$ro["time"];
				 $type=$ro["pro_type"];
				 $id=$ro["s_id"];
				 
				 $uoo++;
		?>
		
	     <td rowspan="7" width="200" height="150" ><img src="imageU1/proview.php?tool_id=<?php echo $resp ?>" width="100%" height="135%" /></td>
	    
		  <tr><td colspan="9"><label ><h3>
		  
		  <input type="text" name= "try" value="<?php echo "$pn"; ?>" readOnly style="color:red;"/>
		  <input type="hidden" name= "id" value="<?php echo "$id"; ?>" readOnly />
		  
		  </label></td></tr></h3>
			 <tr><td colspan="9"><label >&nbsp&nbsp&nbsp <font color="grey" >TYPE  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </font><?php echo " $type"; ?></td></tr>
		 <tr><td colspan="9"><label >&nbsp&nbsp&nbsp <font color="grey" >QUALITY  </font>&nbsp&nbsp&nbsp <?php echo "$qlt"; ?></td></tr>
		  
		  
		  
		 <tr >
		 <td colspan="1" dir="ltr"><label >&nbsp&nbsp&nbsp <?php echo "$wt Kg Left "; ?></td>
		 <td colspan="2"><label >&nbsp&nbsp&nbsp <?php echo "₹ $amt per Kg"; ?></td>
		 </tr>
		 
		 
		 
	  <tr ><td colspan="9"><label >&nbsp&nbsp&nbsp Last Update time : <?php echo "$tm"; ?></td></tr>
		
		 
		 <tr>
		
		 <?php if($wt<=0) {?>
		  <td >&nbsp&nbsp&nbsp <input type="submit" value="Not available!!!" name="submit_btn" style="width:55%; color:red; background:none; border:2px solid red;"/></td>
		 <?php }else {?>
		  <td>&nbsp&nbsp&nbsp <input type="submit"  value="Remove" name="submit_btn" style="width:55%; color:red; background:none; border:2px solid red;"/></td>
		 <?php } ?>
		  <td><input type="submit"  value="Update" name="update_btn" style="width:55%; color:green; background:none; border:2px solid green;"/></td>
		  </tr>		
		</tr>
	   </table><br>
		</div>  
        </div>
      
      </div>
		</form>
				
				<?php 
					
			
			}
			if($l==0){
	?>
	<center><H1><img src="img/logo/notav.png" width="200px" height="200px"/><br>
					<font color="#600f0f">NO ITEM FOUND</font>
		</H1></CENTER>
	<?php
}
 


 ?>
<?php
     if(isset($_REQUEST['submit_btn']))
    {
      $pn=$_POST['try'];
	  $id=$_POST['id'];
	  $fi=$_SESSION['login_user'];
$sql = "DELETE FROM vegsel WHERE pro_name='$pn' and for_id='$fi' and s_id = $id";
       
if ($con->query($sql) === TRUE) {
		?>
		<script>
		alert("SUCCESSFULLY REMOVED THE ITEM");
		</script>
		<?php
		echo("<meta http-equiv='refresh' content='0'>");
 } 
 else {
    echo "Error deleting record: " . $con->error;
}
    }
	
?>

<?php
     if(isset($_REQUEST['edit_btn']))
    {
      $pn=$_POST['try'];
	  $_SESSION['login_user']=$pn;
	  echo "$pn";
	}
?>

<?php

	if(isset($_POST['update_btn'])){
		$id=$_POST['id'];
		$pn=$_POST['try'];
	?>
	
	<script>
		window.location = "edit.php?id=<?php echo $id; ?>";
	</script>
	
	<?php
	}

?>

  
<?php if($uoo>=3) {?> 
	
  	<div id="templatemo_footer_wrapper" align="center">
<?php } else {  ?>
	<div id="templatemo_footer_wrapper" align="center" style="position:fixed; left:0; bottom:0; width:100%;">	

<?php } ?>
<footer>
	<div id="templatemo_footer">
    
		<h3><i> <img src="img/logo/mic.png" width="80px" height="40px" />AGRO-MARKETING</i></h3>

	</div>
	</footer>
	
</div>

 <!-- /container -->       
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


