<?php

$name = 'Oba John';
$ID = 'HNG-04363';
$email = 'obajohn75@gmail.com';
$language = 'PHP';
$output = 'Hello world, this is %s with HNGi7 ID %s and email %s using %s for stage 2 task';
$output =  sprintf($output, $name, $ID, $email, $language);
echo $output;