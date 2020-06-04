<?php

$name = 'Oba John';
$id = 'HNG-04363';
$email = 'obajohn75@gmail.com';

$output = 'Hello world, this is %s with HNGi7 ID %s using PHP for stage 2 task';
$output =  sprintf($output, $name, $id);
echo $output;
