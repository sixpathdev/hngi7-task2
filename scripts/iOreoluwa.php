<?php

$name = "Isaac Adegboye";
$hng_id = "HNG-03357";
$email = "isaac.adegboye@yahoo.com";
$my_lang = "PHP";
 

function introduction($myName, $id, $myLang, $myEmail) {
    
    return "Hello World, this is " .$myName. " with HNGi7 ID " .$id . " using ".$myLang." for stage 2 task email ".$myEmail."";
}

print(introduction($name,$hng_id,$my_lang, $email));

