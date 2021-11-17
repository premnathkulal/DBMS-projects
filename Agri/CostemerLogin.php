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
		 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
				background-color:#FFFF99;
                padding-top: 50px;
                padding-bottom: 20px;
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

 $sql = "SELECT * FROM `costemer` WHERE BINARY `cos_id` = '".mysql_real_escape_string($user_name)."' 
        AND BINARY `passwrd` = '".mysql_real_escape_string($user_psw)."' ";

 $result=mysqli_query($con,$sql);
 
if(!mysqli_num_rows($result)>0){
	?>
	
	<script>
	alert("User name or password is innccorrect !");
	window.location="CostemerLogin.html";
	</script>
	
	<?php
	
	
 }else{

	 $row = mysqli_fetch_assoc($result);
    
     $mname=$row['cos_name'];	 
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
                
        <a class="navbar-brand" href="CostemerLogin.php" ><font color="white">HOME</font></a>
            </div>
           
            
			       		 
			 <div class="form-group">
			  <div class="dropdown">
    <a class="dropbtn"><font color="#4ffF50">PRODUCTS
    </FONT>
    </a>
    <div class="dropdown-content">
      <a href="buyp1.php?pass=PRODUCTS">BUY PRODUCTS</a>
      <a href="probuylist.php">YOUR BUYINGS</a>
    </div>
  </div>  
  </div> 
			
			
              <div class="navbar-form navbar-right" >        
                       
			 <a class="navbar-brand" href="coscontactus.php"><font color="#4ffF50">CONATCT_US</a>  
		     <a class="navbar-brand" href="profile.php"><font color="#4ffF50">PROFILE</a>    
             <a class="navbar-brand" href="logout.php"><font color="#d8d8d8"><strong>LOGOUT</strong></a>
           

		   
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
               
   
		<section>
		
								<img class="mySlides w3-animate-fading" src="img/baner/veg3.jpg" style="width:100%; height:400px;">				
								
								<img class="mySlides w3-animate-fading" src="img/baner/veg5.jpg" style="width:100%; height:400px;">
								
								<img class="mySlides w3-animate-fading" src="img/baner/veg1.jpg" style="width:100%; height:400px;">		
					
								<img class="mySlides w3-animate-fading" src="img/baner/veg2.png" style="width:100%; height:400px;">	
					
		</section>
		<hr style="border:2px solid red;">
		 
    <center>
	<table border="0" width="1100px" height="350px">
	<tr>
 
		<td>  <h2><font color = "#ff0066"><u><b>Todays Market Rate</u></b></h2><br>
        <marquee direction = "up" scrollamount="4" style="height:150px;"><br>	
              	<div >	
		<?php
				require  "init.php";
						
		        $poc="select * from products";
				$adv=mysqli_query($con,$poc);
				while($advm=$adv->fetch_assoc()){					
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
		     <br>
				<?php			
					}
				?> 
				</marquee>
		 
       
	          <font color = "red"><P><br>50 Rs will be added as a shipping price to each product<br>
				 If you face Any issues please <a href = "coscontactus.php">Contact_us</a>
			  </p>
			  </div></td>
			  
			  
		<td><div>	
		
			<a href="buyp1.php?pass=PRODUCTS"><img src="img/baner/vegbun.png" width="100%" height="100%"/></a>
       
	    </div></td>
			  
			  </tr>
		</table>
      <hr>
   
    
    
    <br>
	
<div id="templatemo_footer_wrapper" align="center" style="width:100%; height:430px; background-color:black; font-family:arial;">
<footer>
	  <br>  <table border="0" width="100%" rules='cols'>
		<tr>
				
				<td><font color="white"><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp About Transportation</h3></font></td>
				<td><font color="white"><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp About us</h3></font></td>
				<td colspan="2"><font color="white"><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp Why Agro Marketing</h3></font></td>
		</tr>
		
			<tr>
			<form action="" method="POST">
			
				 <td rowspan="3"><font color="white"><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp50 Rs will be added as a shipping<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspprice to each product<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp If you face Any issues please<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href = "coscontactus.php"><font color="sky blue">Contact_us</font></a><br></h4></font></td>
				
				<td rowspan="3"><font color="white"><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp We build this Websites for <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp the farmers to sell their <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp products directly to the<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp customers without the <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp involvement of a mediaters<br></h4></font></td>
				
				
				<td rowspan="3" colspan="2"><font color="white"><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Agro-Marketing is the <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGood option for Farmers Who Produce <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp more than their local  markets<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp will buy....<br></h4></font></td>
			<tr>
			<tr>
				
			<tr>
		  <tr>
				
			</form>
			
			<td></td>
			
			<td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="#">
          
            </a></td>
			<td dir="ltr" ><hr><a href="#" ><img src="img/logo/call.png" width="70px" height="70px" style="border-radius:100px;"/></a><font color="white">Support Helpline: +8722275074

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
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}
</script>
		
    </body>
</html>
