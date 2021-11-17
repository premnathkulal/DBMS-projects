
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
				background-color:#FFFF99;
				border-radius:0px;
			}
			input[type=submit] {
			background-color: #4ffF50;
			color: white;
			padding: 8px 10px;
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
        <div id="navbar" class="navbar-collapse collapse" ">
          <form class="navbar-form navbar-center" role="form">
		  <div class="form-group" style="font-family:arial;">         
            <img src="img/logo/cart.svg" width="100px" height="50px" />
            </div>
            <div class="form-group">
             <a class="navbar-brand"href="CostemerLogin.php"><font color="#4ffF50">HOME</font></a>
            </div>
            <div class="form-group">
             <a class="navbar-brand" href="buyp1.php?pass=PRODUCTS"><font color="#4ffF50">BUY</font></a>
            </div>
			
              
         
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
	<div style="position:fixed;left:80px;top:70px; font-family:arial;" >
	  <div class="container" >
    <h1><Center><b>YOUR BUYING LIST</b></CENTER></H1>

	</div>
	</div>
	
	
	<font color="black">
	
	<br><br><br><br><br><br><br>
        <?php
require  "init.php";
$l=0;
$uoo=0;
 session_start();
  $user_name = $_SESSION['login_user'];
 $user_psw = $_SESSION['login_psw'];
 

		$sq="select * from cosform c,products p,former f where p.pro_name = c.pro_name and f.for_id = c.for_id and c.cos_id = '$user_name'";
				
				$resul=mysqli_query($con,$sq);		
				
				while($ro = $resul->fetch_assoc()){
				
				
				 $cd=$ro["cos_id"];
				 $fd=$ro["for_id"];
				 $pn=$ro["pro_name"];
				 $wt=$ro["waight"];
				 $amt=$ro["amount"];
				 $tm=$ro["date"];
				 $yz=$ro["status"];
				$id = $ro['cf_id'];
				$resp=$ro['pro_name'];
				$fors=$ro['f_state'];
				$forn=$ro['for_name'];	
				$uoo++;
				$l=1;
				?>
				<form action="" method="POST">
		 <?php
		
?>	
     <div class="col-md-6">
	 <br>
        <center><div> <table border="0" width="550" height="50">
	    <tr>
	
	     <td rowspan="22" width="200" height="150" ><img src="imageU1/proview.php?tool_id=<?php echo $resp ?>" width="170" height="200" /></td>
	    
		  <tr><td colspan="9"><label><h3><b>
		  
		  <input type="text" name= "try" value="<?php echo "$pn"; ?>" readOnly style="color:red;" />
		  <input type="hidden" name= "idd" value="<?php echo "$id"; ?>" readOnly style="color:red;">
		  
		  </b></h3></label></td>
		  
		  </tr>
		
		
		 <tr ><td colspan="2" ><label ><?php echo "$wt Kg"; ?></td>
		      <td colspan="2" dir = "ltr"><label ><?php echo"₹ $amt "; ?></td>
		 </tr>
		 
		 <tr>
			  <td colspan="2"><label align="right"><?php echo "$forn"; ?></label></td>
			  <td colspan="2"><label align="right"><?php echo "$fors"; ?></label></td>
		 </tr>
		   <tr ><td colspan="22"><label >Buying Date: <?php echo "$tm"; ?></td></tr>
		
				
		   <tr> 
			<td colspan="3">
			<?php if($yz=='N')
			{ 
			?>			
				<b><center><input type="submit" value="Check" name="submit_btn" style="width:40%; background-color:Lime; color:black;"/></b>
			<?php } else { ?>
				<b><center><input type="submit" value="Recived" name="delete" style="width:40%; background-color:red; color:black;"/></b>
			<?php }	?>
		       </td>
		  </tr>	
		  
		</tr>
	   </table>
	   <br>
		</div>  
        </div>
      
      </div>
		</form>
				
				<?php 
				
				
			}
			if($l==0){
	?><h1><center><font color="red"><br><br><br><br>NO ITEM LIST FOUND </font></h1>
	<br><br><br><br><br><br><br><br><br><br><br>
	<?php
}
 

 ?>
<?php
     if(isset($_REQUEST['submit_btn']))
    {
    
			?>
				<script>
				alert("YOU PRODUCT IS ON THE WAY");
			    </script>							
		   <?php
				
    }

     if(isset($_REQUEST['delete']))
    {
      $pn=$_POST['try'];
	  $idd=$_POST['idd'];
	  $ci=$_SESSION['login_user'];
				
					$sql = "DELETE FROM cosform WHERE cf_id='$idd'";
					if ($con->query($sql) === TRUE) {
								?>
									<script>
										alert("THANK YOU FOR SHOPING");
									</script>
								<?php
									echo("<meta http-equiv='refresh' content='0'>");
							}else {
									echo "" . $con->error;
									}
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














