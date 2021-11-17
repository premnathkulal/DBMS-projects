
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
			
			}
			
			input[type=submit]{
			color: white;
			padding: 10px 150px;
			border: none;
			
			border-radius: 5px;
			cursor: pointer;
			}
			button{
			background-color: #4ffF50;
			color: black;
			padding: 10px 10px;
			border: none;
			
			border-radius: 5px;
			cursor: pointer;
			}
			.no-click {
			pointer-events: none;
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
                
             <a class="navbar-brand"href="AdminLogin.php"><font color="#4ffF50">HOME</font></a>
            </div>
			
			<div class="form-group">
                
             <a class="navbar-brand" href="#"><font color="WHITE">MANAGE</font></a>
            </div>
			
			 <?php
				require  "init.php";
				session_start();
				$user_name = $_SESSION['login_user'];
				$q="select * from admin where admin_id = '$user_name'";												
				$w=mysqli_query($con,$q);
				$e=mysqli_fetch_assoc($w);	
				$loc=$e['location'];
				$v=$e['s_user'];
				$nl=0;
  ?>
			<?php if($v=='YES'){ ?>
			  <div class="form-group">
                
             <a class="navbar-brand"href="updaterate.php"><font color="#4ffF50">UPDATE</font></a>
            </div>
			<div class="navbar-form navbar-right" >   
			
					   <a class="navbar-brand" href="addproduct.php"><font color="#4ffF50">ADD</font></a>
					
            </div>
			<?php } ?>
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
  
  	<div style="position:fixed;left:80px;top:70px; background-color:orange;">
	  <div class="container" >
    <h1><Center><b>TRANSPORTATION TO : <?php echo $loc ?></b></CENTER></H1>

	</div>
	</div>
	<br><br><br><br><br><br><br>
  <?php	
	$rrr=1;
	
	
				$q="select * from cosform cf,former f,costemer c 
				where cf.for_id = f.for_id
				and cf.cos_id = c.cos_id
				and c_state = '$loc';";			
				
				$w=mysqli_query($con,$q);
				
			while($e = $w->fetch_assoc()){
				
				$cosid	=	$e['cos_id'];
				$forid	=	$e['for_id'];
				$pname	=	$e['pro_name'];
				$wt		=	$e['waight'];
				$amt	=	$e['amount'];
				$status =   $e['status'];
				$a		=	$e['cf_id'];
				$fname	=	$e['for_name'];
				$cname	=	$e['cos_name'];
				
				$date	=	$e['date'];
								
				$fstate	=	$e['f_state'];
				$fcity	=	$e['f_city'];				
				$fpin	=	$e['f_pincode'];
				$fphno	=	$e['f_phno'];
					
				$cstate	=	$e['c_state'];
				$ccity	=	$e['c_city'];			
				$cpin	=	$e['c_pincode'];
				$cphno	=	$e['c_phno'];
				$cnum   =   $e['card_no'];
				$rrr=0;
			?>
			
			<div class="col-md-6">
	<br>
        <center>
	<form action="" method="POST">
		<table border="0" width="500px" height="200px">
			<tr>
				<td ><center><b><u>PRODUCT</b></center></td>
				<td><center><b><u>FROM</b></center></td>
				<td><center><b><u>TO</b></center></td>
			</tr>	
			<tr>
				<td><center><?php echo"$pname"; ?></center></td>
				<td><center><?php echo"$fname"; ?></center></td>
				<td><center><?php echo"$cname"; ?></center></td>
			</tr>
			<tr>
				<td><center><?php echo"$wt Kg"; ?></center></td>
				<td><center><?php echo"$fstate"; ?></center></td>
				<td><center><font color="red"><?php echo"$cstate"; ?></font></center></td>
				
			</tr>
			<tr>
				<td><center>
				<?php if($cnum == 0){ ?>
				<font color="red"><?php echo"$amt Rs"; ?></font>
				<?php }else{
					?>
				<font color="green"><?php echo"$amt Rs"; ?></font>	
					<?php
				} ?>
				</center></td>
				
				<td><center><?php echo"$fcity"; ?></center></td>
				<td><center><?php echo"$ccity"; ?></center></td>
			</tr>
			<tr>
				<td><center><?php echo"$date"; ?></center></td>
				<td><center><?php echo"$fpin"; ?></center></td>
				<td><center><?php echo"$cpin"; ?></center></td>
			</tr>
			<tr>
				<td><center>
				<font color="#FFFF99">
				<input type="hidden" name= "idd" value="<?php echo "$a"; ?>" readOnly style="width:10px; border:0px; background-color:#FFFF99;"/>
				</font>
				</center></td>
				<td><center><?php echo"$fphno"; ?></center></td>
				<td><center><?php echo"$cphno"; ?></center></td>
			</tr>
			<tr>
				<?php if($status=="N"){?>
						<td colspan="3"><center><input type="submit" name="load" value="TRANSPORT" style="background-color: #4ffF50; color:black;"/></center></td>
				<?php }else{ ?>
						<td colspan="3"><center><input type="submit"  value="TRANSPORTING...." style="background-color: red; " /></center></td>
				<?php } $nl++; ?>
			</tr>
	
		</table>	
		<br>
	</form>
        </div>				
			<?php 
			     
		
	}
	if($rrr==1){?>
		<center><H1><img src="img/logo/notav.png" width="200px" height="200px"/><br>
					<font color="#600f0f">NO ITEM FOUND</font>
		</H1></CENTER>
	<?php
	}
  ?>

  
   <?php
	 require "init.php";
     if(isset($_REQUEST['load']))
    {
      $pn=$_POST['idd'];
	  $sql = "update cosform set status = 'Y' where cf_id='$pn'";
       
if ($con->query($sql) === TRUE) {
		?>
		<script>
		alert("Loaded Successfully");
		</script>
		<?php
		echo("<meta http-equiv='refresh' content='0'>");
 } 
 else {
    echo "Error deleting record: " . $con->error;
}
    }
	
?>
  
  
  
<?php if($nl>=3) {?> 
	
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














