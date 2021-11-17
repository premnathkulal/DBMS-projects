
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
				 background:rgba(0,0,0,0.6); 
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
            <img src="img/cart.svg" width="100px" height="50px" />
            </div>
            <div class="form-group">
                
             <a class="navbar-brand"href="CostemerLogin.php"><font color="#4ffF50">HOME</font></a>
            </div>
            <div class="form-group">
             <a class="navbar-brand" href="probuylist.php"><font color="#4ffF50">BUYING_CART</font></a>
            </div>
              
              <div class="navbar-form navbar-right">
              <input type="text" name="pname" placeholder="Search for..." class="form-control" style="background:white;" >
			     <button type="submit" name="search_btn" class="btn btn-success" style="border-radius:5px;"> <img src="img/search.svg" width="15px" height="15px" /></button>
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
<!---------------------------------------------FOR SEARCH------------------------------------------->
 <?php
     if(isset($_REQUEST['search_btn']))
    {
 require  "init.php";
  $ggn = $_GET['pname'];
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
	  <h1><center><font color="red"><br><br><br><br> Sorry :(<br>Selected item is not Available </font></h1>
	
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
					
						
				
				
				$x=$ro["for_name"];
				$y=$ro["f_state"];
				$z=$ro["f_city"];
				$zz=$ro["f_pincode"];
				
					
						
				?>
				<form action="conbuy.php">
		 <?php
		
		
?>	
     <div class="col-md-6">
	 <br>
        <center><div> <table border="0" width="550" height="230">
	    <tr>
		
		<?php
				
				$resp=$ro['pro_name'];
				$sd++;
		?>
		
	     <td rowspan="8" width="200" height="210" ><img src="imageU1/proview.php?tool_id=<?php echo $resp ?>" width="190" height="220" /></td>
	    
		  <tr><td colspan="22"><label><h3><input type="text" name= "try" value="<?php echo "$pn"; ?>" readOnly style="color:pink;"></h3></label></td></tr>
		   <tr ><td colspan="22"><label ><font color="yellow"><?php echo "$typ"; ?></td></tr>	  
		  <tr ><td colspan="22"><label ><font color="yellow"><?php echo "$qlt"; ?></td></tr>	  
		  <tr>
			<td colspan="12" dir="ltr"><label ><font color="yellow"><?php echo "$wt Kg left "; ?></td>
			<td colspan="8" dir="ltr"><label ><font color="yellow"><?php echo " ₹ $amt per Kg"; ?></td>
	      </tr>
		 
		 
		<tr><td colspan="10" ><center><label ><font color="yellow"><?php echo "$x"; ?></label</td> 
			<td colspan="10" ><center><label ><font color="yellow"><?php echo "$y"; ?></label></td>
			<td colspan="10" ><center><label ><font color="yellow"><?php echo "$z"; ?></label></td>
		</tr>
		 <tr ><td colspan="23"><label ><font color="yellow">Last Update time : <?php echo "$tm"; ?></td></tr>
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
		  <td colspan="4"><input type="hidden" name="forid" value="<?php echo "$fid"; ?>" readOnly style="color:rgba(0,0,0,0);"/></td>	
		 </tr>		
		</tr>
	   </table>
	   
		</div>  
        </div>
      
      </div>
		</form>
				
				<?php 
					
				 
			}
	
 }

	}
 ?>

<!---------------------------------------------SEARCH ENDS----------------------------------------------->


 
 
<?php if($sd>=3) {?> 
	
  	<div id="templatemo_footer_wrapper" align="center">
<?php } else {  ?>
	<div id="templatemo_footer_wrapper" align="center" style="position:fixed; left:0; bottom:0; width:100%;">	

<?php } ?>
<footer>
	<div id="templatemo_footer">
    
		<h3><i><font color="red">powerd_by </font>prems_creations</i></h3>

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














