
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
				background-color:#FFCC66;
                background-size: 100%;
                background-attachment: fixed;
				
            }
            
			table{
				 background:#FFFF99;; 
				border-radius:16px;
			}
			input[type=submit]{
			background-color: #4ffF50;
			color: white;
			padding: 10px 10px;
			border: none;
			
			border-radius: 5px;
			cursor: pointer;
			}
			button{
			background-color: #4ffF50;
			color: white;
			padding: 10px 10px;
			border: none;
			
			border-radius: 5px;
			cursor: pointer;
			}
			.no-click {
			pointer-events: none;
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
		   <div class="form-group" style="font-family:arial;">         
            <img src="img/logo/cart.svg" width="100px" height="50px" />
            </div>
            <div class="form-group">
                
             <a class="navbar-brand"href="CostemerLogin.php"><font color="#4ffF50">HOME</font></a>
            </div>
            <div class="form-group">
             <a class="navbar-brand" href="probuylist.php"><font color="#4ffF50">BUYING_CART</font></a>
            </div>
              
              <div class="navbar-form navbar-right">
              <input type="text" name="pass" placeholder="Search for..." class="form-control" style="background:white;" >
			     <button type="submit" name="search_btn" class="btn btn-success" style="border-radius:5px;"> <img src="img/logo/search.svg" width="15px" height="15px" /></button>
            </div>
            
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

        <?php
require  "init.php";
 session_start();
 
  $sd=0;
  

  ?>	
	<br><br><br><br><br><br>
<!-------------------------------------------------------------------FOR SEARCH----------------------------------------------------------------------------->
 <?php
     if($_REQUEST['pass']!='PRODUCTS')
    {
 require  "init.php";
  $ggn = $_GET['pass'];
  $gn = ucfirst($ggn);
 $sql="select * from vegsel  where  pro_name like '%$gn%'";
$resul=mysqli_query($con,$sql);
?>
	<div style="position:fixed;left:80px;top:70px; ">
	  <div class="container" >
    <h1><Center><b><?php echo "$gn"; ?></b></CENTER></H1>

	</div>
	</div>
	<?php
if(!mysqli_num_rows($resul)>0){
      ?>
	  <center><H1><img src="img/logo/notav.png" width="200px" height="200px"/><br>
					<font color="#600f0f">SORRY!! SUCH PRODUCT NOT EXISTS</font>
		</H1></CENTER>
	  <?php
 }else{
	
	 			
				$sql="select * from vegsel v,former f where  f.for_id=v.for_id and  v.pro_name in
				(
					select pro_name from products p
					where p.pro_name like '%$gn%'		
				)";	
				$resul=mysqli_query($con,$sql);
				
				while($ro = $resul->fetch_assoc()){
					
				 $fid=$ro["for_id"];
				 $pn=$ro["pro_name"];
				 $qlt=$ro["quality"];	
				 $wt=$ro["weight"];
				 $amt=$ro["amount"];
				 $tm=$ro["time"];
				 $typ=$ro["pro_type"];
					
				 $resp=$ro['pro_name'];
				$x=$ro["for_name"];
				$y=$ro["f_state"];
				$z=$ro["f_city"];
				$zz=$ro["f_pincode"];
				$try=$ro['s_id'];
					
				?>
				<form action="conbuy.php">
		 <?php
		
		
?>	
     <div class="col-md-6">
	 <br>
        <center><div > 
		
		<table border="0" width="580" height="235" style="border-radius:0px;">
	    <tr>
		
		<?php
				
				
				$sd++;
		?>
		
	     <td rowspan="8" width="200" height="210" ><img src="imageU1/proview.php?tool_id=<?php echo $resp ?>" width="192" height="109%" /></td>
	    
		  <tr><td colspan="22"><label><h3>
				<font color="black"><font color="red"><?php echo "$pn"; ?></font>
				<input type="hidden" name="try" value="<?php echo $try; ?>" />
		  </h3></label></td></tr>
		   <tr ><td colspan="22"><label ><font color="GREY">TYPE : </FONT><font color="black"><?php echo "$typ"; ?></td></tr>	  
		  <tr ><td colspan="22"><label ><font color="GREY">QUALITY : </FONT><font color="black"><?php echo "$qlt"; ?></td></tr>	  
		  <tr>
			<td colspan="12" dir="ltr"><label ><font color="GREY">LEFT : </FONT><font color="black"><?php echo "$wt Kg left "; ?></td>
			<td colspan="9" dir="ltr"><label ><font color="GREY">&nbsp&nbsp&nbsp AMMOUNT : </FONT><font color="black"><?php echo " ₹ $amt per Kg"; ?></td>
	      </tr>
		 
		 
		<tr><td colspan="10" ><font color="GREY">FROM : </FONT><label ><font color="black"><?php echo "$x"; ?></label></td> 
			<td colspan="10" ><label ><font color="black">&nbsp&nbsp&nbsp&nbsp <?php echo "$y"; ?></label></td>
			<td colspan="10" ><label ><font color="black">&nbsp&nbsp&nbsp&nbsp  <?php echo "$z"; ?></label></td>
		</tr>
		 <tr ><td colspan="23"><label ><font color="grey">Last Update time :</font><font color="black"><?php echo "$tm"; ?></td></tr>
		 <tr>
		  
		  <td colspan="22">		  
				<?php if($wt>0)
		  {
				?>  <input type="submit" value="Buy Now" name="submit_btn" style="width:65%; color:black;"/> 
				<?php 
		} else {
				?>	<font color="red">  
					<button class="no-click"  name="submit_btn"  style="width:65%; background:red;"/>Not Available
				<?php } 
				?>
		  </td>
		
		 </tr>		
		</tr>
	   </table>
	   
		</div>  <br> 
        </div>
      
      </div>
		</form>
				
				<?php 
					
				 
			}
	
 }

	}
 ?>

<!-------------------------------------------------------------------SEARCH-ENDS------------------------------------------------------------------------------->


<!-------------------------------------------------------------------FOR START--------------------------------------------------------------------------------->

 <?php
     if($_REQUEST['pass']=='PRODUCTS')
    {
 require  "init.php";
  $ggn = $_GET['pass'];
  $gn = ucfirst($ggn);
 $sql="select * from vegsel";
$resul=mysqli_query($con,$sql);
?>
	<div style="position:fixed;left:80px;top:70px; ">
	  <div class="container" >
    <h1><Center><b><?php echo "$gn"; ?></b></CENTER></H1>

	</div>
	</div>
	<?php
if(!mysqli_num_rows($resul)>0){
      ?>
	  <center><H1><img src="img/logo/notav.png" width="200px" height="200px"/><br>
					<font color="#600f0f">EMTY LIST</font>
		</H1></CENTER>
	  <?php
 }else{
	
	 			
				$sql="select * from vegsel v,former f,products p where  f.for_id=v.for_id and  v.pro_name = p.pro_name";
				
				$resul=mysqli_query($con,$sql);
				
				while($ro = $resul->fetch_assoc()){
					
				 $fid=$ro["for_id"];
				 $pn=$ro["pro_name"];
				 $qlt=$ro["quality"];	
				 $wt=$ro["weight"];
				 $amt=$ro["amount"];
				 $tm=$ro["time"];
				 $typ=$ro["pro_type"];
					
				 $resp=$ro['pro_name'];
				$x=$ro["for_name"];
				$y=$ro["f_state"];
				$z=$ro["f_city"];
				$zz=$ro["f_pincode"];
				$try = $ro["s_id"];
					
						
				?>
				<form action="conbuy.php">
		 <?php
		
		
?>	
     <div class="col-md-6">
	 <br>
        <center><div>
		<table border="0" width="580" height="235" style="border-radius:0px;">
	    <tr>
		
		<?php
				
				
				$sd++;
		?>
		
	     <td rowspan="8" width="200" height="210">
			<img src="imageU1/proview.php?tool_id=<?php echo $resp ?>" width="192" height="109%" />
		</td>
	    
		  <tr><td colspan="22">
		  
			<label><h3><font color="red"><?php echo "$pn"; ?></font></h3></label>
			<input type="hidden" name="try" value="<?php echo $try;?>">
		  </td></tr>
		   <tr ><td colspan="22"><label ><font color="GREY">TYPE : </FONT><font color="black"><?php echo "$typ"; ?></td></tr>	  
		  <tr ><td colspan="22"><label ><font color="GREY">QUALITY : </FONT><font color="black"><?php echo "$qlt"; ?></td></tr>	  
		  <tr>
			<td colspan="12" dir="ltr"><label ><font color="GREY">LEFT : </FONT><font color="black"><?php echo "$wt Kg left "; ?></td>
			<td colspan="9" dir="ltr"><label ><font color="GREY">AMMOUNT : </FONT><font color="black"><?php echo " ₹ $amt per Kg"; ?></td>
	      </tr>
		 
		 
		<tr><td colspan="10" <font color="GREY">FROM : </FONT><label ><font color="black"><?php echo "$x"; ?></label</td> 
			<td colspan="10" ><label ><font color="black">&nbsp&nbsp&nbsp <?php echo "$y"; ?></label></td>
			<td colspan="10" ><label ><font color="black">&nbsp&nbsp&nbsp <?php echo "$z"; ?></label></td>
		</tr>
		 <tr ><td colspan="23"><label ><font color="black">Last Update time : <?php echo "$tm"; ?></td></tr>
		 <tr>
		  
		  <td colspan="22">		  
				<?php if($wt>0)
		  {
				?>  <CENTER><input type="submit" value="Buy Now" name="submit_btn" style="width:63%; color:black;"/> 
				<?php 
		} else {
				?>	<font color="red">  
					<CENTER><button class="no-click"  name="submit_btn"  style="width:65%; background:red;"/>Not Available
				<?php } 
				?>
		  </td>
		 
		 </tr>		
		</tr>
	   </table>
	   <BR>
		</div>  
        </div>
      
      </div>
		</form>
				
				<?php 
					
				 
			}
		}

	}
 ?>



<!-------------------------------------------------------------------END START--------------------------------------------------------------------------------->

 
 
<?php if($sd>=3) {?> 
	
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


	</body>
</html>














