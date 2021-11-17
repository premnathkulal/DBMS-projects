<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/cssstyle.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
				background: #FFCC66;
            }
			table{
				 background:#FFFF99; 
				
			}
			input[type=submit] {
			background-color: #4ffF50;
			color: white;
			padding: 7px 20px;
			border: none;			
			border-radius: 5px;
			cursor: pointer;
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
             <a class="navbar-brand" href="AdminLogin.php" ><font color="#4ffF50">HOME</font></a>
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
						if($v=='YES'){ ?> 
								
			<div class="form-group">               
             <a class="navbar-brand" href="supercom.php" ><font color="#4ffF50">VIEW_ALL</font></a>
            </div>
						<?php } ?>
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
   
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  

    <!-- Main jumbotron for a primary marketing message or call to action -->              
 
	  <center>
	<?php
				require  "init.php";
				session_start();
				$user_name = $_SESSION['login_user'];
				$q="select location from admin where admin_id = '$user_name'";												
				$w=mysqli_query($con,$q);
				$e=mysqli_fetch_assoc($w);	
				$loc=$e['location'];
				$uoo=0;
				$k=0;
						
								?>
								   <br>
 <div style="position:fixed;left:80px;top:70px; background-color:orange;" >
	  <div class="container" >
	  
    <h1><Center><b>USER REQUESTS FROM : <?php echo $loc; ?></center></h1>
		
					 
	</div>
	</div>    
    <br> <br> <br> 
								<?php
	
		        $poc="select * from request as r,costemer as c where  r.uid = c.cos_id and r.Role='CUSTEMER'";				
				$adv=mysqli_query($con,$poc);
				
				while($advm= $adv->fetch_assoc()){
				
				$resp=$advm['uid'];
				$id=$advm['id'];
					$role=$advm['Role'];
				if($resp != ''){
					$name=$advm['cos_name'];
					$pin=$advm['c_pincode'];
					$city=$advm['c_city'];
					$pno=$advm['c_phno'];
					$date = $advm['Date'];				
					$state=$advm['c_state'];
					$k=1;
					$uoo++;
					if($state == $loc){
				
		?> 
<form action="" method="POST" >		
          <center>
           <div class="col-md-12">
		      
				 <table border="0" width="100%" height="100">			 
                   <tr><td rowspan="4" width="10px">
					<?php 
						if($role == "FARMER"){ 
					?>
							<img src="img/fc.jpg" width="170" height="120" />
					<?php 
						} else { 
					?>
							<img src="img/cc.jpg" width="170" height="120" />
					<?php
						}
					?>				 
				 </td>
				 </tr>	    
		            <tr>
					     <td ><center><?php echo "$name"; ?></td>
						 <td><input type="hidden" name= "uid" value="<?php echo "$resp"; ?>" readOnly style="color:rgba(0,0,0,0); border:none; background:rgba(0,0,0,0)"></td>
						 <td><input type="hidden" name= "id" value="<?php echo "$id"; ?>" readOnly style="color:rgba(0,0,0,0); border:none; background:rgba(0,0,0,0)"></td>
						 </center></td>
						 <td colspan="4" width="400"><?php echo "RECIEVED DATE : $date"; ?>
						 </td>
						
						  
				    </tr>
		            <tr>
					 <td colspan="3"><center><?php echo "ROLE : $role"; ?></center></td>
					   <td colspan="3"><center><?php echo "STATE : $state"; ?></center></td>					  
					   <td colspan="3" width="400"><center><input type="submit" name="view" value = " View " style="color:red; width:35%;"/></center></td>
					</tr>
		            <tr>
					   <td  colspan="3"><center><?php echo "PINCODE : $pin"; ?></center></td>
					   <td  colspan="3"><center><?php echo "PHONE NUMBER : $pno"; ?></center></td>
					 <td colspan="3" width="400"><center><input type="submit" name="delete" value = "delete" style="color:red; width:35%;"/></center></td>
					</tr>	           	            
		       	 </table>
				 <br>
			 
			</div>
</form>		    
				
				<?php
				}
				
				
				}	
					
					
	}
				

		        $poc="select * from request as r,former as f where  r.uid = f.for_id and r.Role='FARMER'";				
				$adv=mysqli_query($con,$poc);
				
				while($advm= $adv->fetch_assoc()){
				
				$resp=$advm['uid'];
				$id=$advm['id'];
					$role=$advm['Role'];
				if($resp != ''){
					$name=$advm['for_name'];
					$pin=$advm['f_pincode'];
					$city=$advm['f_city'];
					$pno=$advm['f_phno'];
					$date = $advm['Date'];				
					$state=$advm['f_state'];
					$k=1;
					$uoo++;
			if($state == $loc){
				
		?> 
<form action="" method="POST" >		
          <center>
           <div class="col-md-12">
		      
				 <table border="0" width="100%" height="100">			 
                   <tr><td rowspan="4" width="10px">
					<?php 
						if($role == "FARMER"){ 
					?>
							<img src="img/fc.jpg" width="170" height="120" />
					<?php 
						} else { 
					?>
							<img src="img/cc.jpg" width="170" height="120" />
					<?php
						}
					?>				 
				 </td>
				 </tr>	    
		            <tr>
					     <td ><center><?php echo "$name"; ?></td>
						 <td><input type="hidden" name= "uid" value="<?php echo "$resp"; ?>" readOnly style="color:rgba(0,0,0,0); border:none; background:rgba(0,0,0,0)"></td>
						 <td><input type="hidden" name= "id" value="<?php echo "$id"; ?>" readOnly style="color:rgba(0,0,0,0); border:none; background:rgba(0,0,0,0)"></td>
						 </center></td>
						 <td colspan="4" width="400"><?php echo "RECIEVED DATE : $date"; ?>
						 </td>
						
						  
				    </tr>
		            <tr>
					 <td colspan="3"><center><?php echo "ROLE : $role"; ?></center></td>
					   <td colspan="3"><center><?php echo "STATE : $state"; ?></center></td>					  
					   <td colspan="3" width="400"><center><input type="submit" name="view" value = " View " style="color:red; width:35%;"/></center></td>
					</tr>
		            <tr>
					   <td  colspan="3"><center><?php echo "PINCODE : $pin"; ?></center></td>
					   <td  colspan="3"><center><?php echo "PHONE NUMBER : $pno"; ?></center></td>
					 <td colspan="3" width="400"><center><input type="submit" name="delete" value = "delete" style="color:red; width:35%;"/></center></td>
					</tr>	           	            
		       	 </table>
				 <br>
			 
			</div>
</form>		    
				
				<?php
			
				}
				
					
				}		
					
	}
		
				
				if($k == 0){
					?>
					<h1><center><font color="red"><br><br><br>NO COMPLAINTS FOUND</font></h1>
	<br><br><br><br><br><br><br><br><br><br><br><br>
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
		
		
<?php
     if(isset($_REQUEST['delete']))
    {
      $id=$_POST['id'];
      $uid=$_POST['uid'];
	 
$sql = "DELETE FROM request WHERE uid='$uid' and id='$id'";
       
if ($con->query($sql) === TRUE) {
		?>
		<script>
		alert("Comment deleted !!!!!!");
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
     if(isset($_REQUEST['view']))
    {
      $id=$_POST['id'];
      $uid=$_POST['uid'];
	$getc="select * from request where id = '$id' and uid = '$uid'";
				$q=mysqli_query($con,$getc);
				$w= mysqli_fetch_assoc($q);
				$goo=$w['Complent'];
				?>
				<div class="box">
    <a class="button" href="#popup1" id="modal"></a>
</div>
<script type="text/javascript">
document.getElementById("modal").click();
</script>
				<div id="popup1" class="overlay">
    <div class="popup">
        <h2>Hi Agro-Marketing</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
            <?php echo nl2br($goo) ?>
        </div>
    </div>
</div>
				<?php
	}
?>

    </body>
</html>

	