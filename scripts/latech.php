<?php
//variable to holds data
$name = "RAJI AJIBOLA LATEEF";
$id = "HNG-01859";
$email = "rajilateef.rl@gmail.com";
$language = "php";
function bio($fullname, $id, $language, $email){
    return ("Hello World, this is $fullname with HNGi7 ID $id using $language for stage 2 task email $email");
}

//for output
$output = bio($name, $id, $language, $email);
echo($output);

?>

