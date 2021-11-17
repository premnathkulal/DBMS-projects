<!DOCTYPE html>
<html>
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
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <body>
        <?php
				require  "init.php";
				session_start();
				$user_name = $_SESSION['login_user'];
				$user_psw = $_SESSION['login_psw'];
				
				$sql="select * from admin  where  admin_id='$user_name' and  passwrd = '$user_psw'";

				$result=mysqli_query($con,$sql);		
 
				if(!mysqli_num_rows($result)>0){
		?>
	
					<script>
					alert("Password and User name do not match");
					window.location="Adminlogin.html";
					</script>
	
		<?php
				}else{
					$row = mysqli_fetch_assoc($result);
					$loc=$row['location'];
					$status="success";
					}
		?>
	
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
                
        <a class="navbar-brand" href="AdminLogin.php" ><font color="white">Home</font></a>
            </div>
           
             
           
			<div class="form-group">
             <a class="navbar-brand" href="trancedetails.php"><font color="green">ViewTransportationDetails</font></a>
            </div>
			   <div class="form-group">
             <a class="navbar-brand" href="suser.php"><font color="green">UpdateProductRate</font></a>
            </div>
			<div class="form-group">
			<?php
				require "init.php";
				$a="select count(id) as total from request r,former f where f.state='$loc' and r.uid = f.for_id";
				$b=mysqli_query($con,$a);
				$c=mysqli_fetch_assoc($b);
				$c=$c['total'];			
			?>
			<?php
				
				require "init.php";
				$h="select count(id) as total from request r,costemer c where c.state='$loc' and r.uid = c.cos_id";
				$j=mysqli_query($con,$h);
				$k=mysqli_fetch_assoc($j);
				$l=$k['total'];			
			?>
			   <a class="navbar-brand" href="comentpg.php"><font color="green">ViewUserComplents(
			 <?php 
			 if($c!=0){
			 ?>
			 <font color = "red"><?php echo $l+$c; ?></font>	 
			 <?php
			 } else{
				 echo"$c";
			 }?>
			 )
			 </a>
            </div></font>
			
			  <div class="navbar-form navbar-right" >       	        
            <a class="navbar-brand" href="logout.php"><font color="green">Logout</font></a>	   
            </div>
			
			
			 <div class="navbar-form navbar-right" >        	        
            <a class="navbar-brand"><font color="green"><?php echo "State : "?> 
		
			<input type="text" name= "loc" value="<?php echo "$loc"; ?>" readOnly style="background-color:black; border : 0px; width:100px;"/>
			
			</font>  
			</a>	
            </div>
           		
            </form>


		
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
   
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
    <br><br><br><br><br>
               
    
    
    <div class="container">
        
      <!-- Example row of columns -->
      
      <div class="row">
          
        <div class="col-md-6">
            <left><img src="tile.png" height="190px" width="290x" ></left>
            <h3><font color = "#ff0066">Former</h3></font>
            <p><font color = "#ff9966">Sell your products to the costemers and get the profit to your product direct from the customer,<br>
			Sell your Second hand Machines to the costmer and get the aropriate money,<br>
			By the Machines from the sellers with upperable prices.</font> </p>
            <p><a class="btn btn-default" href="#" role="button" style="  background: #330066;  "><font color="#000099">Sell  products &raquo;</font></a></p>
        </div>
		<div class="col-md-6">
					//For future Use
		</div> 
      </div>

      <hr>
    </div>
    
    
    <br>
    <div id="templatemo_footer_wrapper" align="center">
<footer>
	<div id="templatemo_footer">
    
		<h3><i><font color="red">powerd_by </font>prems_creations</i></h3>

	</div>
	</footer>
	
</div>

		
    </body>
</html>

 