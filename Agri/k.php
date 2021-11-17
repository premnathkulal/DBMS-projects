
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
 $user_name = $_GET["uname"];
 $user_psw = $_GET["passwrd"];
 $sql="select for_id from former  where  for_id='$user_name' and  passwrd = '$user_psw'";

 $result=mysqli_query($con,$sql);
 
if(!mysqli_num_rows($result)>0){
	 echo "error";
 }else{
	 $row = mysqli_fetch_assoc($result);
	 $form=$row['for_id'];
	 $idd=100;
	while($idd!=0){
		$sq="select jol,loj,for_id from sample where id='$idd'";
		 $resul=mysqli_query($con,$sq);
		
			
				
				$ro = mysqli_fetch_assoc($resul);
				
				 $st=$ro["for_id"];
				$rt=$ro["jol"];	
					if($st == $form){
						
				
				?>
				<form action="" method="POST">
				<br><center><div> <table border="1" width="600">
	    <tr>
		
	     <td rowspan="7" width="300" height="200">image</td>
	    
		   <tr ><td colspan="2"><?php echo "$rt"; ?></tr>
		   
		  <tr><td colspan="2"><input type="text" name="try" value="<?php echo "$rt"; ?>" readonly="readonly"></td></tr>
		  
		  
		  <tr><td colspan="2">joy3</td></tr>
		  
		  <tr><td colspan="2">joy4</td></tr>
		  <tr><td colspan="2">joy6</td></tr>
		  <tr><td><input type="submit" value="edit"/>
		  </td><td><input type="submit" value="delete" name="submit_btn" /></td>
		  
		  </tr>		
		</tr>
	   </table>
		</div>  
		</form>
				
				<?php 
					}
				 $idd--;
				
			}
 }
 ?>

<?php
    if(isset($_REQUEST['submit_btn']))
    {
     $user_name = $_POST["try"];
$sql = "DELETE FROM sample WHERE jol='$user_name'";

if ($con->query($sql) === TRUE) {
       echo "<script>alert('$user_name deleted');</script>";
   header("Refresh:0");
} else {
    echo "Error deleting record: " . $con->error;
} 
	 
    }
?>
 <h1>hi</h1>
	</body>
</html>














