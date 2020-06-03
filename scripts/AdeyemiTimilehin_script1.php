<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
$myObj->name = "Adeyemi Timilehin";
$myObj->ID = 02251;
$myObj->language = "php";
$myObj->Email="adeyemitimmy@gmail.com"
  
$myJSON = json_encode($myObj);

echo $myJSON;

echo "Hello World, this is Adeyemi Timilehin Mike with HNGi7 ID 02251 using php for stage 2 task\n\n";
flush();
?>
