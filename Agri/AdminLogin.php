<!DOCTYPE html>
<html>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/cssstyle.css">
		
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

		 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
				background: white;
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
				
				
				$sql = "SELECT * FROM `admin` WHERE BINARY `admin_id` = '".mysql_real_escape_string($user_name)."' 
						AND BINARY `passwrd` = '".mysql_real_escape_string($user_psw)."' ";
		
				$result=mysqli_query($con,$sql);		
 
				if(!mysqli_num_rows($result)>0){
		?>
	
					<script>
					alert("User name or password is innccorrect !");
					window.location="Adminlogin.html";
					</script>
	
		<?php
				}else{
					$row = mysqli_fetch_assoc($result);
					$loc=$row['location'];
					$v=$row['s_user'];
					$nam=$row['name'];
					$aid=$row['admin_id'];
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
                
        <a class="navbar-brand" href="AdminLogin.php" ><font color="white">HOME</font></a>
            </div>
           
             			       
			       		 
			 <div class="form-group">
			  <div class="dropdown">
					<a class="dropbtn"><font color="#4ffF50">PRODUCTS</FONT></a>
						<div class="dropdown-content">
							<a href="trancedetails.php">MANAGE-MARKET</a>
						    <a href="addproduct.php">ADD-PRODUCTS</a>
							<a href="updaterate.php">UPDATE</a>
						</div>
			  </div>  
			</div> 
            
			
			 <div class="form-group">
			  <div class="dropdown">
					<a class="dropbtn"><font color="#4ffF50">TOOLS</FONT></a>
						<div class="dropdown-content">
							<a href="agrotools.php">MANAGE-TOOLS</a>
						    <a href="addtool.php">ADD-TOOLS</a>
							<a href="advtool.php?pass=agritools">REMOVE-TOOLS</a>
						</div>
			  </div>  
			</div> 
			
			
		
			

			
	        <div class="form-group">
				<?php if($v=='YES'){?>
					<a class="navbar-brand" href="addadmin.php"><font color="#4ffF50">+ADD_ADMIN</font></a>
				<?php }?>
            </div>
			
			<div class="form-group">
			<?php
			
				require "init.php";
				$a="select count(id) as total from request r,former f where f.f_state='$loc' and r.uid = f.for_id";
				$b=mysqli_query($con,$a);
				$c=mysqli_fetch_assoc($b);
				$far=$c['total'];			
							
				$h="select count(id) as total from request r,costemer c where c.c_state='$loc' and r.uid = c.cos_id";
				$j=mysqli_query($con,$h);
				$k=mysqli_fetch_assoc($j);
				$cus=$k['total'];	
				
			?>
			   <a class="navbar-brand" href="comentpg.php"><font color="#4ffF50">COMPLAINTS
			 <?php 
			 if(($cus+$far)!=0){
			 ?>
			<span class="badge badge-danger" style="background-color:red;"><?php echo $cus+$far; ?></span>	 
			 <?php
			 } else{
				?><span class="badge badge-danger" style="background-color:red;"><?php echo $cus+$far; ?></span><?PHP
			 }?>
			
			 </a>
			
            </div></font>
			
			
			 <div class="navbar-form navbar-right">
			  <div class="dropdown">
					<a class="dropbtn"><font color="#4ffF50">WELCOME : <?php echo strtoupper($nam); ?></FONT></a>
						<div class="dropdown-content">
							<a href="#"><?php echo $aid; ?></a>
							<a href="#"><?php echo strtoupper($nam); ?></a>
						    <a href="#"><?php echo strtoupper($loc); ?></a>
							<a href="usercom.php"><img src="img/logo/noti.png" width=20% height=20%/>
							
							<?php
									require "init.php";
									$a="select count(id) as total from request  where Role ='USER'";
									$b=mysqli_query($con,$a);
									$c=mysqli_fetch_assoc($b);
									$far=$c['total'];			
							?>
									<span class="badge badge-danger" style="background-color:red;"><?php echo $far; ?></span>
									
							</a>
							<hr><a href="logout.php">LOGOUT</a>
						</div>
			  </div>  
			</div> 
        
            </form>
	
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
	  <div class="jumbotron" style="background-image:url(img/head.jpg); background-size: 100%;
                background-attachment: fixed; height:300px">  
      <div class="container" > 
	<CENTER><table border = "0" width="100px">
	<tr><td></td>
	
	   <td><center><font color ="white"> <h1><B>WELCOME ADMIN</h1></font></center></h3></td> 
	  
	</table>
      </div>
    </div>
	
	<table border="0px" width="100%" >

	<tr>
	<td><h4>&nbsp &nbsp &nbsp <b>PRODUCTS TRANSACTIONS</b></h4></td>
	<td><h4>&nbsp &nbsp &nbsp  <b>TOOLS TRANSACTIONS </b></h4></td>
	</tr>
<tr><td><center><div id="myfirstchart" style="height: 250px; width: 650px; background-color:rgba(0,0,0,0.1);"></div></center></td>
	<td><center><div id="myfirschart" style="height: 250px; width: 650px; background-color:rgba(0,0,0,0.1);"></div></center></td></td>
</table>
<br><br><br><br>
<hr>

<script>

Morris.Line({
	
  element: 'myfirstchart',  
   
  data: [
  <?php 
			require "init.php";
			$sql="select * from pro_gra;";

			$result=mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($result)){
				$date=$row['date'];
				$coun=$row['c'];
			?>

    { y: '<?php echo $date; ?>', a: <?php echo $coun; ?> },
  <?php
  			}		
  ?>
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Series A','Series B'],

  hideHover:'auto',
  stacked:true
});


  
</script>

<script>
Morris.Line({
	
  element: 'myfirschart',  
   
  data: [
  <?php 
			require "init.php";
			
			$sql="select c,date from toolg order by date;";


			$result=mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($result)){
				$date=$row['date'];
				$coun=$row['c'];
				
			?>

    { y: '<?php echo $date; ?>', a: <?php echo $coun; ?> },
  <?php
  			}		
  ?>
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['No of Orders ', 'Series B'],
  
  
  hideHover:'auto',
  stacked:true
});


  
</script>
    <br>
     <div id="templatemo_footer_wrapper" align="center" style="left:0; bottom:0; width:100%; ">
<footer>
	<div id="templatemo_footer">
    
		<h3><i> <img src="img/logo/mic.png" width="80px" height="40px" />AGRO-MARKETING</i></h3>

	</div>
	</footer>
	
</div>

		
    </body>
</html>

 