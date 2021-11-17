
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
			color: white;
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
          
            <img src="img/logo/tools.svg" width="100px" height="50px" />
            </div>
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
			
			<?php if($v=='YES'){?>
			  <div class="form-group">
                
             <a class="navbar-brand"href="advtool.php?pass=agritools"><font color="#4ffF50">TOOLS</font></a>
            </div>
			<div class="navbar-form navbar-right" >   
			
					   <a class="navbar-brand"href="addtool.php"><font color="#4ffF50">ADD</font></a>
					
            </div>
			<?php } ?>
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
        <?php
				require  "init.php";
				session_start();
				$user_name = $_SESSION['login_user'];
				$q="select location from admin where admin_id = '$user_name'";												
				$w=mysqli_query($con,$q);
				$e=mysqli_fetch_assoc($w);	
				$loc=$e['location'];
				$nl=0;
  ?>
  
  	<div style="position:fixed;left:80px;top:70px; background-color:orange;">
	  <div class="container" >
    <h1><Center><b>TOOL TRANSPORTATION TO : <?php echo $loc ?></b></CENTER></H1>

	</div>
	</div>
	<br><br><br><br><br><br><br>
  <?php	
	$rrr=1;
	
	
				$q="select * from toolbuy tf,former f,agritools t
				
				where f.f_state = '$loc'
				and t.tool_id = tf.tool_id		
				and tf.for_id  = f.for_id"; 
								
				$w=mysqli_query($con,$q);
				
			while($e = $w->fetch_assoc()){
				
				$tid	=	$e['tool_id'];
				$piec	=	$e['piec'];
				$tname	=	$e['name'];
				$tamt	=	$e['amt'];
				$a      =   $e['id'];
				$fname	=	$e['for_name'];
				$state	=	$e['f_state'];
				$city	=	$e['f_city'];
				$pinc	=	$e['f_pincode'];
				$phno	=	$e['f_phno'];
				$status =   $e['status'];
			
				$rrr=0;
			?>
			
			<div class="col-md-6">
	<br>
        <center>
	<form action="" method="POST">
		<table border="0" width="500px" height="200px">
			<tr>
				<td ><center><b><u>PRODUCT</b></center></td>
				<td><center><b><u>TO</b></center></td>
				
			</tr>	
			
			<tr>
				<td><center><?php echo"$tname"; ?></center></td>
				<td><center><?php echo"$fname"; ?></center></td>
			</tr>
			
			<tr>
				<td><center><?php echo"$piec piecees"; ?></center></td>
				<td><center><?php echo"$state"; ?></center></td>
			</tr>
			
			<tr>
				<td><center><?php echo"$tamt Rs"; ?></center></td>
				<td><center><?php echo"$city"; ?></center></td>
			</tr>
			
			<tr>
				<td><center>
				<font color="#FFFF99">
				<input type="hidden" name= "idd" value="<?php echo "$a"; ?>" readOnly />
				</font>
				</center></td>
				<td><center><?php echo"$pinc"; ?></center></td>
			</tr>
			<tr>
				<td></td>
				<td><center><?php echo"$phno"; ?></center></td>
			</tr>
			<tr>
				<?php if($status=="N"){?>
						<td colspan="3"><center><input type="submit" name="load" value="TRANSPORT" style="background-color: #4ffF50; color:black;"/></center></td>
				<?php }else{ ?>
						<td colspan="3"><center><input type="submit"  value="TRANSPORTING...." style="background-color: red;" /></center></td>
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
					<font color="#600f0f">NO TRANSPORTATIONS FOUND</font>
		</H1></CENTER>
	<?php
	}
  ?>

  
   <?php
	 require "init.php";
     if(isset($_REQUEST['load']))
    {
      $pn=$_POST['idd'];
	  $sql = "update toolbuy set status = 'Y' where id='$pn'";
       
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














