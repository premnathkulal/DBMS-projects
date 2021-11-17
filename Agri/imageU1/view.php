<?php

   
     $id = $_REQUEST['tool_id']; 
	 
     include "init.php";
  
    $result = $con->query("SELECT image FROM agritools WHERE tool_id = $id");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
       
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 	
    }else{
        echo 'Image not found...';
    }

?>

