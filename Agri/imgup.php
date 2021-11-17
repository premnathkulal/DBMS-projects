<html>
<head>
<title>Hello </title>
</head>
<body>



<?php
require  "init.php";
 $sql="select * from products";
 
 $result=mysqli_query($con,$sql);
 
	 $row = mysqli_fetch_assoc($result);
     $state=$row['pro_image'];
     ?>
	 <img src="<?php echo "$state"; ?>" width="500" height="500" />
</body>
</html>
