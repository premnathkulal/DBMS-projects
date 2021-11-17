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
                
             <a class="navbar-brand" href="trancedetails.php"><font color="#4ffF50">MANAGE</font></a>
            </div>
			
			
			
			  <div class="form-group">
                
             <a class="navbar-brand"href="#"><font color="WHITE">UPDATE</font></a>
            </div>
			<div class="navbar-form navbar-right" >   
			
					   <a class="navbar-brand" href="addproduct.php"><font color="#4ffF50">ADD</font></a>
					
            </div>
			
			
			
            </form>
     
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
   
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  

    <!-- Main jumbotron for a primary marketing message or call to action -->              
    <br>
 <div style="position:fixed;left:80px;top:70px; background-color:yellow;" >
	  <div class="container" >
	  
    <h1><Center>CURRENTLY AVAILABLE PRODUCTS<?php 
	date_default_timezone_set('Asia/Kolkata');
   					    $date = date('d/m/Y', time());
						echo"$date "; ?>
		</center></H1>
		
				
				 
	</div>
	</div>    
    <br> <br> <br> <br> <br>
	  <center>
	<?php
				require  "init.php";
				
			    $b=1;
								
		        $poc="select * from products";
				
				$adv=mysqli_query($con,$poc);
				
				while($advm=$adv->fetch_assoc()){
					
				
				$resp=$advm['pro_name'];
				
				$mp=$advm['maxp'];
				$mip=$advm['minp'];
		?>        
          
           <div class="col-md-6" >
		      <form action="" method="POST" >
				 <table border="0" width="600" height="200">			 
                 <tr><td rowspan="6" width="10px"><img src="imageU1/proview.php?tool_id=<?php echo $resp ?>" width="180" height="180" /></td></tr>	    
		            <tr><td colspan="2"><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
					
					<input type="text" name="pn" value="<?php echo "$resp"; ?>" style="border:none; background-color:#FFFF99;" readonly />
					
					</h3></tr>
					
		            <tr><td colspan="2"><center>Minimum Rate(Rs) : <input type="text" name="min" value="<?php echo $mip; ?>"></center></td></tr>
		            <tr><td colspan="2"><center>Maximum Rate(Rs) : <input type="text" name="max" value="<?php echo $mp; ?>"></center></td></tr>	
					
					<tr>
					<td><center><input type="submit" name="update" value="UPDATE" style="width:70%; height:30px; border:none; background:lime;"></center></td>
					<td><center><input type="submit" name="delete" value="DELETE" style="width:70%; height:30px; border:none; background:red;"></center></td>
					</tr>   
					
		       	 </table>
			</form>
				 <br>
			 
			</div>
		    
				<?php
				
				  } 
				if(isset($_POST['update'])){
					
					$min = $_POST['min'];
					$max = $_POST['max'];
					$pn = $_POST['pn'];
					$sql = "update products set minp = $min,maxp = $max WHERE pro_name = '$pn'";
						if(mysqli_query($con,$sql)){
						?>
							<script>
							 alert("SUCCESSFULLY UPDATED");							 
							</script>
						<?php
						echo("<meta http-equiv='refresh' content='0'>");
						}else{
							?>
							<script>
							 alert("ERROR DURING UPDATION");
							</script>
							<?PHP
						}
				}
				if(isset($_POST['delete'])){
					$pn = $_POST['pn'];
					$sql = "DELETE FROM products where pro_name = '$pn'";
					if(mysqli_query($con,$sql)){
						?>
							<script>
							 alert("SUCCESSFULLY DELETED");							 
							</script>
						<?php
						echo("<meta http-equiv='refresh' content='0'>");
						}else{
							?>
							<script>
							 alert("ERROR DURING DELETION");
							</script>
							<?PHP
						}
				}
				?> 
				
		
    <div id="templatemo_footer_wrapper" align="center" style="background:black;">
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