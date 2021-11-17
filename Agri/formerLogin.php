<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/cssstyle.css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
			    background-color:#FFFF99;
            }



.dropdown .dropbtn {
    font-size: 18px;    

    color: white;
    padding: 0px 5px;
    background-color: inherit;
    font-family: arial;
  
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
  .navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
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

 
 $sql = "SELECT * FROM `former` WHERE BINARY `for_id` = '".mysql_real_escape_string($user_name)."' 
        AND BINARY `passwrd` = '".mysql_real_escape_string($user_psw)."' ";

 $result=mysqli_query($con,$sql);
 
if(!mysqli_num_rows($result)>0){
	?>
	
	<script>
	alert("User name or password is innccorrect !");
	window.location="FormerLogin.html";
	</script>
	
	<?php
	
	
 }else{

	 $row = mysqli_fetch_assoc($result);
     $state=$row['f_state'];
     $mname=$row['for_name'];	 
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
          
            <img src="img/logo/mic.png" width="100px" height="50px" />
            </div>
            <div class="form-group">
                
        <a class="navbar-brand" href="formerLogin.php" ><font color="white">HOME</font></a>
            </div>
           		 
			 <div class="form-group">
			  <div class="dropdown">
    <a class="dropbtn"><font color="#4ffF50">PRODUCTS
    </FONT>
    </a>
    <div class="dropdown-content">
      <a href="mm.php">YOUR PRODUCTS</a>
      <a href="sell.html">SELL PRODUCTS</a>
    </div>
  </div>  
  </div> 
			 
			
			   <div class="form-group">
			  <div class="dropdown">
    <a class="dropbtn"><font color="#4ffF50">TOOLS
    </FONT>
    </a>
    <div class="dropdown-content">
      <a href="toollist.php?pass=agritools">BUY TOOLS</a>
      <a href="toolcart.php">YOUR BUYINGS</a>
    </div>
  </div>  
  </div> 
			
			
              <div class="navbar-form navbar-right" >        
               
			<a class="navbar-brand" href="farcontactus.php"><font color="#4ffF50">CONTACT_US</a>  			   
		    <a class="navbar-brand" href="forprof.php"><font color="#4ffF50">PROFILE</a>    
            <a class="navbar-brand" href="logout.php"><font color="#d8d8d8"><b>LOGOUT</b></a>

		   
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
           <img src="img/logo/indexheader.png" height="180px" width="500x" ></left>
            <h3><font color = "#fe0066">Farmer</h3></font>
            <p><font color = "#ff0066">Sell your products to the costemers and get the profit to your product direct from the customer,<br>Sell your Second hand Machines to the costmer and get the aropriate money,<br>By the Machines from the sellers with upperable prices.</font> </p>
            <br><p><a  href="sell.html"  style="padding:10px 15px; color:red; background:none; border:2px solid red;" /><font color="#000099">Sell  products &raquo;</font></a></p>
        </div>
	 <div class="col-md-6" > 
	     
		  <h2><font color = "#ff0066"><u><b>Todays Market Rate</u></b></h2><br>
        <marquee direction = "up" scrollamount="4" style="height:150px;"><br>	
              	<div >	
		<?php
				require  "init.php";
				
			    $poc="select * from products";
				$adv=mysqli_query($con,$poc);
				
				while($advm= $adv->fetch_assoc()){	
				
		        
				
				$resp=$advm['pro_name'];
				$rim=$advm['pro_image'];
				$mp=$advm['maxp'];
				$mip=$advm['minp'];
		?>        
          
           
				 <table border="0" width="600">             	
	                 <tr><td rowspan="4" width="10px"><img src="imageU1/proview.php?tool_id=<?php echo $resp ?>" width="170" height="120" /></td></tr>	    
		            <tr><td ><h4><?php echo "$resp"; ?></h3></tr>
		            <tr><td ><?php echo "Minimum Rate(Rs) : $mip"; ?></td></tr>
		            <tr><td ><?php echo "Maximum Rate(Rs) : $mp"; ?></td></tr>
		           	            
		       	 </table>
		     <br><br><br>
				<?php
				
				} 
				
				?> 
				</marquee>
		   </div> 
       
	          <font color = "#ff0066"><P><br><br>Saw the Current Marketing Rate <br>
			  and get the same rate for your products<br>
				 your products are directly reach to the custemers<br>
			     If you face Any issues please <a href = "farcontactus.php">Contact_us</a><br><br>
				 
			  </p>
			  </div>  
    </div>
    
    
    <br><br><br>
<div id="templatemo_footer_wrapper" align="center" style="background:black;">
<footer>
	<div id="templatemo_footer">
    
		<h3><i> <img src="img/logo/mic.png" width="80px" height="40px" />AGRO-MARKETING</i></h3>

	</div>
	</footer>
	
</div>

		
    </body>
</html>
