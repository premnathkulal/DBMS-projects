<?php

require "init.php";

$sql = "SELECT image FROM agritools WHERE tool_id = 3";
$result = mysql_query($sql);

list($blob_binary) = mysql_fetch_array($result);

header("Content-type: image/jpeg");

if ($_REQUEST['resize'] != "" && $_REQUEST['resize'] != null) { //resizes the images if the url contains
    $dimensions = explode(",", $_REQUEST['resize']);
    echo resize($blob_binary, $dimensions[0], $dimensions[1]);
} else {
    echo $blob_binary;
}

function resize($blob_binary, $desired_width, $desired_height) { // simple function for resizing images to specified dimensions from the request variable in the url
    $im = imagecreatefromstring($blob_binary);
    $new = imagecreatetruecolor($desired_width, $desired_height) or exit("bad url");
    $x = imagesx($im);
    $y = imagesy($im);
    imagecopyresampled($new, $im, 0, 0, 0, 0, $desired_width, $desired_height, $x, $y) or exit("bad url");
    imagedestroy($im);
    imagejpeg($new, null, 85) or exit("bad url");
    echo $new;
}

?>