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
				background:white;;
            }
		
			#k1{
				border:1px solid red;
			}
			#k2{
				border:0.5px solid grey;
			}
			input[type=submit] {
			background-color:rgba(0,0,0,0);
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

#tdd {
    width: 5em;
    line-height: 2em;
    background-color: white;
    font-weight: bold;
}
#trd:hover {
    color: black;
    background-color: rgba(0,0,0,0.1);
}

#trd:hover #tdd {
	
    background-color: rgba(0,0,0,0.1);
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
			<div class="form-group">               
             <a class="navbar-brand" href="comentpg.php" ><font color="#4ffF50">PREVIOUS</font></a>
            </div>
          
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
   
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  

    <!-- Main jumbotron for a primary marketing message or call to action -->              
 

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
								
 <div style="position:fixed;left:80px;top:70px; background-color:rgba(0,0,0,0.2);" >
	 
	 <div class="container" >  
    <h2><Center><b>ALL FARMERS AND CUSTOMERS REQUESTS</center></h2>				 
	</div>
	</div>    
 
	  <CENTER><br><br><br><br><table border="0" width="98%" S>
	  <tr>
			<td  width=100px ><hr id="k1"><center><b>NAME</b></center><hr id="k1"></td>
			<td  width=100px><hr id="k1"><center><b>ROLE</b></center><hr id="k1"></td>
			
			<td  width=100px><hr id="k1"><center><b>STATE</b></center><hr id="k1"></td>
			<td  width=100px><hr id="k1"><center><b>PINCODE</b></center><hr id="k1"></td>
			<td  width=100px><hr id="k1"><center><b>PHONE NUMBER</b></center><hr id="k1"></td>
			<td  width=100px><hr id="k1"><center><b>RECIEVED DATE</b></center><hr id="k1"></td>
			<td  width=100px><hr id="k1"><center><b>DELETE</b></center><hr id="k1"></td>
	  </tr>
	  
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
					
				
		?> 
<form action="" method="POST" >		
          <center>
          
						 
                       
		            <tr id ="trd">
						
					     <td id ="tdd"><center><input type="submit" name="view" value = "<?php echo "$name"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/>
						 <input type="hidden" name= "uid" value="<?php echo "$resp"; ?>" readOnly style="color:rgba(0,0,0,0); border:none; background:rgba(0,0,0,0)">
						 <input type="hidden" name= "id" value="<?php echo "$id"; ?>" readOnly style="color:rgba(0,0,0,0); border:none; background:rgba(0,0,0,0)">
						 </center><hr id = "k2"></td>
						  <td id ="tdd" height="20px"><center><input type="submit" name="view" value = "<?php echo "$role"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/></center><hr id = "k2"></td>
						 
						<td id ="tdd" height="20px"><center><input type="submit" name="view" value = "<?php echo "$state"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/></center><hr id = "k2"></td>	
						<td id ="tdd" height="20px"><center><input type="submit" name="view" value = "<?php echo "$pin"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/></center><hr id = "k2"></td>						
				  
				
					   <td id ="tdd" ><center><input type="submit" name="view" value = "<?php echo "$pno"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/></center><hr id = "k2"></td>
					   <td id ="tdd"><center> <input type="submit" name="view" value = "<?php echo "$date"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/></center><hr id = "k2"></td>	
					   <td id ="tdd" height="20px"><center><input type="image" name = "delete" src="img/logo/del.png" alt="Submit" width="15px" height="14px"/></center></td>
					 
				    </tr>
		         
</form>		    
				
				<?php
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
			
				
		?> 
<form action="" method="POST" >		
          <center>
           <div class="col-md-12">
		      
				    
		            <tr>
					     <td height="20px"><center><input type="submit" name="view" value = "<?php echo "$name"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/>
						 <input type="hidden" name= "uid" value="<?php echo "$resp"; ?>" readOnly style="color:rgba(0,0,0,0); border:none; background:rgba(0,0,0,0)">
						 <input type="hidden" name= "id" value="<?php echo "$id"; ?>" readOnly style="color:rgba(0,0,0,0); border:none; background:rgba(0,0,0,0)">
						 </center><hr id = "k2"></td>
						 <td height="20px"><center><input type="submit" name="view" value = "<?php echo "$role"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/></center><hr id = "k2"></td>
					   <td height="20px"><center><input type="submit" name="view" value = "<?php echo "$state"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/></center><hr id = "k2"></td>					  
					<td  ><center><input type="submit" name="view" value = "<?php echo "$pin"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/></center><hr id = "k2"></td>
					   <td  ><center><input type="submit" name="view" value = "<?php echo "$pno"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/></center><hr id = "k2"></td>
						 <td><center><input type="submit" name="view" value = "<?php echo "$date"; ?>" style="color:black; width:100%; background-color:rgba(0,0,0,0s); height:100%"/></center><hr id = "k2"> </td>
						  <td><center><input type="image" name = "delete" src="img/logo/del.png" alt="Submit" width="15px" height="14px"/></center></td>
						
					</tr>
			 
			</div>
</form>		    
				
				<?php
			
				}
				
	}
				
	?>
	</table>
	<?php
				if($k == 0){
					?>
					<h1><center><font color="red"><br><br><br>NO COMPLAINTS FOUND</font></h1>
	<br><br><br><br><br><br><br><br><br><br><br><br>
					<?php
				}
          
				?> 
		
	
 <?php if($uoo>=5) {?> 
	
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
     if(isset($_POST['delete_x']))
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
     if(isset($_POST['view']))
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

	