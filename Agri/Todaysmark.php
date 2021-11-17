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
			#iop{
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
          <form class="navbar-form navbar-center">
		  
		   <div class="form-group">       
             <img src="img/logo/mic.png" width="100px" height="50px" />
            </div>
			
            <div class="form-group">
                
             <a class="navbar-brand" href="index.php" ><font color="#4ffF50">HOME</font></a>
            </div>
            <div class="form-group">
             <a class="navbar-brand" href="Todaysmark.php?pass=products"><font color="white">MARKET</a>
            </div>
            
              <div class="form-group">
             <a class="navbar-brand" href="#"><font color="#4ffF50">TRENDS</font></a>
            </div>
			
			
            <div class="navbar-form navbar-right">
              <input type="text" name="pass" placeholder="Search for..." class="form-control" style="background:white;" />
			  <button type="submit" name="search" class="btn btn-success" style="border-radius:5px;"> <img src="img/logo/search.svg" width="15px" height="15px" /></button>
            </div>
			
			
            </form>        
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
   
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  

    <!-- Main jumbotron for a primary marketing message or call to action -->              
    <br><font color="black">
 <div style="position:fixed;left:80px;top:70px; background-color:yellow;" >
	  <div class="container" >
	  
    <h1><Center>INDIA'S TODAYS MARKETING RATE <?php 
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
				
			    $uoo=1;
				$pass = $id = $_REQUEST['pass'];	
				if($pass == "products"){
		        $poc="select * from products";
				}else{
				$poc="select * from products where pro_name like '%$pass%'";
				}
				$adv=mysqli_query($con,$poc);
				while($advm=$adv->fetch_assoc()){	
				
				$resp=$advm['pro_name'];
			
				$mp=$advm['maxp'];
				$mip=$advm['minp'];
				$uoo++;
		?>        
          
           <div class="col-md-4">
		      
				 <table border="0" id="iop" width="400" height="100">			 
                 <tr><td rowspan="4" width="10px"><img src="imageU1/proview.php?tool_id=<?php echo $resp ?>" width="170" height="120" /></td></tr>	    
		            <tr><td ><h4><center><?php echo "$resp"; ?></center></h3></tr>
		            <tr><td ><center><?php echo "Minimum Rate(Rs) : $mip"; ?></center></td></tr>
		            <tr><td ><center><?php echo "Maximum Rate(Rs) : $mp"; ?></center></td></tr>	           	            
		       	 </table>
				 <br>
			 
			</div>
		    
				<?php
				
				} 
		
if($uoo <= 9 ){
 ?>
 
<div class="footer footer-fixed-bottom"  align="center"  style=" left:0; bottom:0; width:100%;">

 <?php
}else{	
?>

<div class="footer footer-fixed-bottom"  align="center"  style="left:0; bottom:0; width:100%;">

<?php
}
?>
<div id="templatemo_footer_wrapper" align="center" style="width:100%; height:430px; background-color:black; font-family:arial;">
<footer>
	  <br>  <table border="0" width="100%" rules='cols'>
		<tr>
				<td><font color="white"><h3>&nbsp&nbsp&nbsp Reach us</h3></font></td>
				<td><font color="white"><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp About us</h3></font></td>
				<td colspan="2"><font color="white"><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp Why Agro Marketing</h3></font></td>
		</tr>
		
			<tr>
			<form action="" method="POST">
				<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="email" placeholder="Emial" style="background-color:#FFFFe9; width:75%; border:0px; height:30px;" required /></td>
				 
				<td rowspan="3"><font color="white"><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp We build this Websites for <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp the farmers to sell their <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp products directly to the<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp customers without the <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp involvement of a mediaters<br></h4></font></td>
				
				<td rowspan="3" colspan="2"><font color="white"><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Agro-Marketing is the <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGood option for Farmers Who Produce <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp more than their local  markets<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp will buy....<br></h4></font></td>
			<tr>
			<tr>
				<td border="1px"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <textarea rows="5" cols="50" name="msg" placeholder="Place for your complaints" style="background-color:#FFFFe9; width:75%; border:0px; " required  /></textarea></td>
			<tr>
		  <tr>
				<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="submit" value="submit" style="background-color:lime; border:none; border-radius:15px; width:75%; height:30px;"/></td>
			</form>
			
			<td></td>
			
			<td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="#">
          <a href="#" ><img src="img/logo/call.png" width="70px" height="70px" style="border-radius:100px;"/></a>
            </a></td>
			<td dir="ltr" ><font color="white"><hr>Support Helpline: +8722275074

					<br>agromarketing@gmail.com (9.30am-6:30pm IST)

					
			</td>
			
			</tr>
		
           <tr>
		   <td colspan="4"> <a href="#"><hr>
            <center> 
						
			 
              <a href="#">&nbsp&nbsp <img src="img/logo/s2.png" width="50px" height="50px" style="border-radius:100px;"/></a>

              <a href="#">&nbsp&nbsp <img src="img/logo/s3.png" width="50px" height="50px" style="border-radius:100px;"/></a>
		
			  <a href="#">&nbsp&nbsp <img src="img/logo/s1.png" width="50px" height="50px" style="border-radius:100px;"/></a>
     
			</center>
			</td><tr>
        </table>
</footer>	
</div>
</div>
    <?php
	if(isset($_POST['submit'])){
		include "init.php";
		$email = $_POST['email'];
		$msg = $_POST['msg'];
		$role = 'USER';
		
						date_default_timezone_set('Asia/Kolkata');
   					    $date = date('Y/m/d', time());
						
		$sql="insert into request values('','$email','$role','$msg','$date')";
		$request=mysqli_query($con,$sql);
		if($request){
			?>
				<script>
					alert("Your Message has been sent");
				</script>
			<?php
		}
	}
?>
          
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