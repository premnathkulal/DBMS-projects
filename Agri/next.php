
 <html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="php" href="formerLogin.php">

    </head>
    <body>
        <?php

       require  "formerLogin.php";
	   require "init.php";
	   $name=$_GET['name'];
	   echo $name;

 ?>
		
    </body>
</html>
