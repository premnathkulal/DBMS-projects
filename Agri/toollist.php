
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
          <form class="navbar-form navbar-center" role="form" action="" method="POST">
		   <div class="form-group">
          
            <img src="img/logo/tools.svg" width="100px" height="50px" />
            </div>
            <div class="form-group">  
             <a class="navbar-brand"href="formerLogin.php"><font color="#4ffF50"> HOME</a>
            </div>
            <div class="form-group">
             <a class="navbar-brand" href="toollist.php?pass=agritools"><font color="#4ffF50"><font color="white">TOOLS</font></a>
            </div>
               <div class="form-group">
             <a class="navbar-brand" href="toolcart.php"><font color="#4ffF50">CART</a>
            </div>
            
            <div class="navbar-form navbar-right">
              <input type="text" name="pname" placeholder="Search for..." class="form-control" style="background:white;" >
			  <button type="submit" name="search_btn" class="btn btn-success" style="border-radius:5px;"> <img src="img/logo/search.svg" width="15px" height="15px" /></button>
            </div>
         
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
	<div style="position:fixed;left:80px;top:70px; color:red;" >
	  <div class="container" >
    <h1><Center><b><u>AVAILABLE TOOLS</u></CENTER></H1>

	</div>
	</div>
	
	
	
	
	<br><br><br><br><br><br><br>
        <?php
		$uoo = 0;
		require  "init.php";
		session_start();
	
			$pass = $_REQUEST['pass'];
			if($pass=='agritools'){
			$sq="select * from agritools";
			}else{
			$sq="select * from agritools where name like '%$pass%'";
			}
			$resul=mysqli_query($con,$sq);
			while($ro = $resul->fetch_assoc()){
				
				
				 $tid=$ro["tool_id"];
				 $nm=$ro["name"];
				 $amt=$ro["ammount"];	
				 $dt=$ro["Date"];
				 $info=$ro["info"];
				 
			   	 $spno=$ro["sell_pno"];
				 $online=$ro["availability"];
				 
				 $brand=$ro["brand"];
				 $color=$ro["color"];
				 $fuel=$ro["fuel"];	
				 $power=$ro["power"];
				 $wrnt=$ro["wrnt"];
				
				$uoo=1;
				?>
<font color="black">				

		
    <center> 
         <div class="container" style="background-color:lightblue;   border-radius:0px; padding: 35px 45px;"><br>
  <form action="" method="POST">
   <table border="0" width="1080" height="400" style="border-radius:0px;background-color:white;">
		<tr><td rowspan="11" width="350"><img src="imageU1/view.php?tool_id=<?php echo $tid ?>" height="400" width="400"/></td></tr>
		
		<tr><td colspan="4"><h3><p style="font-weight:700;">&nbsp &nbsp <font color="rgba(0,0,0,0.4)" > 
		<?php  echo $nm; ?>
		
		<input type="hidden" name="tid" value="<?php  echo $tid; ?>" readonly>
		<input type="hidden" name="spno" value="<?php  echo $spno; ?>" readonly>
		
		</font> </p></h3></td></tr>
		
		
		
		<tr>
			<td width="100">&nbsp &nbsp  <font color="grey" >BRAND  </font><HR></td>
			<td>&nbsp &nbsp <?php  echo  $brand; ?><HR></td>
			
			<td width="100">&nbsp &nbsp  <font color="grey" >PRICE  </font><HR></td>
		    <td>&nbsp &nbsp <?php  echo  $amt; ?><HR></td>
		   
		</tr>
		
		<tr>
		  <?php if($wrnt != 0){?>
		<td width="100">&nbsp &nbsp  <font color="grey" >WARRANTY  </font><HR></td>
			<td>&nbsp &nbsp <?php  echo  "$wrnt YEARS"; ?><HR></td>
			<?php } ?>
			<?php if($color != "" AND $color != " "){?>
			<td width="100">&nbsp &nbsp  <font color="grey" >COLOR  </font><HR></td>
		   <td>&nbsp &nbsp <?php  echo  $color; ?><HR></td>
		  <?php } ?>
		</tr>
		
		
		<tr>
			<?php if($fuel != "" AND $fuel != " "){?>
		<td width="100">&nbsp &nbsp  <font color="grey" >FUEL  </font><HR></td>
			<td>&nbsp &nbsp <?php  echo  $fuel; ?><HR></td>
			<?php } ?>
			
				<?php if($power != "HP" AND $power != " HP" ){?>
			<td width="100">&nbsp &nbsp  <font color="grey" >POWER  </font><HR></td>
		   <td>&nbsp &nbsp <?php  echo  $power; ?><HR></td>
				<?php }?>
		</tr>
		
		
	
		
		
		<tr><td colspan="4" height="150">&nbsp &nbsp &nbsp <?php echo wordwrap($info,100,"<br>&nbsp&nbsp&nbsp&nbsp\n");  ?></td></tr>
		
		<tr><td colspan="4" >&nbsp &nbsp <center>
		<?php if($online == '1'){?>
		<input type="submit" name="buy" value="ORDER NOW" style="border:2px solid red; border-top-left-radius:25px; border-bottom-left-radius:25px; border-top-right-radius:0px; border-bottom-right-radius:0px; color:red; padding:10px 55px; background:none;" />
	 
		<input type="submit" name="contact" value="CONTACT SELLER" style="border:2px solid lime; border-top-right-radius:25px; border-bottom-right-radius:25px; border-top-left-radius:0px; border-bottom-left-radius:0px; color:green; padding:10px 40px; background:none;" />
		<?php }else{?>
			<input type="submit"  name="contact" value="CONTACT SELLER" style="border:2px solid lime; border-radius:25px;  color:green; padding:10px 40px; background:none;" />
		<?php	
		}
		?>
		</center><br></td></tr>
		 </form>
   </table>

</font>
</div>  
<br><br>
			<?php 
	
			}
 ?>
 
  <?php
     if(isset($_REQUEST['search_btn']))
    {
		
		$ggn = $_POST['pname'];
		?>
		<script>
			window.location = "toollist.php?pass=<?php echo $ggn; ?>";
		</script>
		<?php
	}
	 if(isset($_POST['contact']))
    {
		
		$spno = $_POST['spno'];
		?>
		<script>
			alert("<?php echo "CONTACT NUMBER : $spno"; ?>");
		</script>
		<?php
	}
	 if(isset($_POST['buy']))
    {
		
		$pid = $_POST['tid'];
		?>
		<script>
			window.location="toolconf.php?requ=<?php echo $pid; ?>";
		</script>
		<?php
	}
 ?>
 
 <?php
	if($uoo==1){
?>
		<div id="templatemo_footer_wrapper" align="center">
 <?php
	}else{
		?>
		<center><H1><img src="img/logo/notav.png" width="200px" height="200px"/><br>
					<font color="#600f0f">NO TOOLS FOUND</font>
		</H1></CENTER>
		<div id="templatemo_footer_wrapper" align="center" style="position:fixed; left:0; bottom:0; width:100%;">	
		<?php
	}
 ?>
<footer>
	<div id="templatemo_footer">
    
		<h3><i><font color="WHITE">  <img src="img/logo/mic.png" width="80px" height="40px" />AGRO-MARKETING</i></h3>

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