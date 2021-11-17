
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
				background-color:#FFFF99;
                background-size: 100%;
                background-attachment: fixed;  
            }
            
			table{
				 background:rgba(0,0,0,0.5); 
				border-radius:16px;
			}
			input[type=submit] {
			background-color: #4ffF50;
			color: white;
			padding: 10px 10px;
			border: none;
			
			border-radius: 5px;
			cursor: pointer;
			}
			
			input[type=text] {
			background:rgba(0,0,0,0.0);
			color: black;
			padding: 10px 10px;
			border: none;
			width:98%;
			border-radius: 5px;
			cursor: pointer;
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
             <a class="navbar-brand"href="formerLogin.php"><font color="#4ffF50"> HOME</a>
            </div>
            <div class="form-group">
             <a class="navbar-brand" href="toollist.php?pass=agritools"><font color="#4ffF50"><font color="#4ffF50">BUY</font></a>
            </div>
               <div class="form-group">
             <a class="navbar-brand" href="#"><font color="WHITE">CART</a>
            </div>
            
           
         
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
	<div style="position:fixed;left:80px;top:70px; color:red;" >
	  <div class="container" >
    <h1><Center><b><u>YOUR BUYING LIST</u></CENTER></H1>

	</div>
	</div>
	
	
	
	
	<br><br><br><br><br><br><br>
        <?php
		$uoo = 0;
		$k=0;
		require  "init.php";
		session_start();
	    $fid= $_SESSION['login_user'];
		
	    	$sq="select * from agritools a,toolbuy t where t.tool_id = a.tool_id and t.for_id='$fid'";
			
			$resul=mysqli_query($con,$sq);
			
			while($ro = $resul->fetch_assoc()){
				
				
				 $tid=$ro["tool_id"];
				 $nm=$ro["name"];
				 $amt=$ro["amt"];	
				 $dt=$ro["Date"];
				 $info=$ro["info"];
				 
				 $brand=$ro["brand"];
				 $color=$ro["color"];
				 $fuel=$ro["fuel"];	
				 $power=$ro["power"];
				 $wrnt=$ro["wrnt"];
				 $sts=$ro["status"];
				 $id = $ro['id'];
				 $pie = $ro['piec'];
				 $uoo++;
				$k=1;
				?>
<font color="black">				

		
    <center> 
	<div class="col-md-6">
      
  <form action="" method="POST">
   <table border="0" width="622" height="220" style="border-radius:0px;background-color:white;">
   
		<tr><td rowspan="9" width="35"><img src="imageU1/view.php?tool_id=<?php echo $tid ?>" height="150" width="200"/></td></tr>
		
		<tr><td colspan="4"><h3>&nbsp &nbsp <font color="rgba(0,0,0,0.4)" > 
		<?php  echo $nm; ?>
		
		<input type="hidden" name="tid" value="<?php  echo $tid; ?>" readonly />
		<input type="hidden" name="id" value="<?php  echo $id; ?>" readonly />
		<input type="hidden" name="fid" value="<?php  echo $fid; ?>" readonly />
		
		</font> </h3></td></tr>
		
		
		
		<tr>
			<td width="100">&nbsp &nbsp  <font color="grey" >BRAND  </font></td>
			<td>&nbsp &nbsp <?php  echo  $brand; ?></td>
			
			<td width="100">&nbsp &nbsp  <font color="grey" >DATE  </font></td>
		    <td>&nbsp &nbsp <?php  echo  $dt; ?></td>
		   
		</tr>
		
		<tr>
		  <?php if($wrnt != 0){?>
		<td width="100">&nbsp &nbsp  <font color="grey" >WARRANTY  </font></td>
			<td>&nbsp &nbsp <?php  echo  "$wrnt YEARS"; ?></td>
			<?php } ?>
			<?php if($color != "" AND $color != " "){?>
			<td width="100">&nbsp &nbsp  <font color="grey" >COLOR  </font></td>
		   <td>&nbsp &nbsp <?php  echo  $color; ?></td>
		  <?php } ?>
		</tr>
		
		
		<tr>
			<?php if($fuel != "" AND $fuel != " "){?>
		<td width="100">&nbsp &nbsp  <font color="grey" >FUEL  </font></td>
			<td>&nbsp &nbsp <?php  echo  $fuel; ?></td>
			<?php } ?>
			
				<?php if($power != "HP" AND $power != " HP" ){?>
			<td width="100">&nbsp &nbsp  <font color="grey" >POWER  </font></td>
		   <td>&nbsp &nbsp <?php  echo  $power ; ?></td>
				<?php }?>
		</tr>
		
		<tr>
			<td width="100">&nbsp &nbsp  <font color="grey" >PRICE  </font></td>
			<td>&nbsp &nbsp <?php  echo  "$amt Rs"; ?></td>
			
			<td width="100">&nbsp &nbsp  <font color="grey" >PIECE  </font></td>
		    <td>&nbsp &nbsp <?php  echo  $pie; ?></td>
		   
		</tr>
		
		<tr>
		<?php if($sts == "N"){ ?>
		 <td colspan="4" >&nbsp &nbsp <center><input type="submit" name="check" value="CHECK" style="width:65%; color:green; background:none; border:1px solid green;"/></center></td> 
		<?php }else{ ?>	
		 <td colspan="4" >&nbsp &nbsp <center><input type="submit" name="delete" value="RECIVED" style="width:65%; color:red; background:none; border:1px solid red;"/></center></td> 
		<?php } ?>
		</tr>
		
   </table>
   <br>
  </form>
</font>
</div>  



			<?php 
	}

	if(isset($_POST['check'])){
		?>
		<script>
			alert("YOUR PRODUCT IS ON THE WAY !!!!");
		</script>
		<?php
	}
		if(isset($_POST['delete'])){
			
				$tooid=$_POST['tid'];
				$id=$_POST['id'];
				$fooid=$_POST['fid'];
				
				$sql = "DELETE FROM toolbuy WHERE  id='$id'";
				
				if ($con->query($sql) === TRUE) {
				?>
						<script>
						alert("THANK YOU FOR SHOPING");
						</script>
		   <?php
						echo("<meta http-equiv='refresh' content='0'>");
				}
		}
 ?>
<?php
if($k==0){
	?>
		<center><H1><img src="img/logo/notav.png" width="200px" height="200px"/><br>
					<font color="#600f0f">NO ITEM FOUND</font>
		</H1></CENTER>
	<?php
}
	if($uoo>=3){
?>
		<div id="templatemo_footer_wrapper" align="center">
 <?php
	}else{
		?>
		<div id="templatemo_footer_wrapper" align="center" style="position:fixed; left:0; bottom:0; width:100%;">	
		<?php
	}
 ?>
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