<?php

$name = "Yusuf Abdulrahman";
$hng_id = "HNG-06182";
$language = "PHP";
$email = "abdulrahmanyusuf125@gmail.com";

function show_info(){ 
	global $name, $hng_id, $language, $email;
	return "Hello World, this is $name with HNGi7 ID $hng_id using $language for stage 2 task and $email";
}

echo(show_info());
?>
