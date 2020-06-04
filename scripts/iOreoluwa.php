<?php

   $name = "Isaac Adegboye";
   $hng_id = "HNG-03357";
   $email = "isaac.adegboye@yahoo.com";
   $programming_lang = "PHP";

function introduction($myName, $id, $myEmail, $myLang) {
    
    return "Hello World, this is " .$myName. " with HNGi7 ID " .$id . " using ".$myLang." for stage 2 task";
}

print(introduction($name, $hng_id, $email, $programming_lang));
