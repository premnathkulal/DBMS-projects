<?php

   
     $id = $_REQUEST['tool_id']; 
	 
     include "init.php";
  
    $result = $con->query("SELECT pro_image FROM products WHERE pro_name = '$id'");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
       
        header("Content-type: image/jpg"); 
        echo $imgData['pro_image']; 	
    }else{
        echo 'Image not found...';
    }

?>

