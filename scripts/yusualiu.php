<?php
$fullname = 'Ololade-Yusuf';
$id= 'HNG-04383';
$language = 'PHP';

$data = "Hello World, this is ".$fullname." with HNgI7 ID ".$id." using ".$language ." for stage 2 task";
header('Content-Type: application/json');
echo json_encode($data);