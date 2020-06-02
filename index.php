<?php

$baseDir = "./scripts";
$files = [];

if(!is_dir($baseDir)){
    exit("Invalid directory path");
}

foreach(scandir($baseDir) as $file){
    if($file !== "." && $file !== ".."){
        $files[] = $file;
    }
}

var_dump($files);

foreach($files as $file){
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    if($extension === "js"){
        $command = exec("node $baseDir/$file", $output);
    }
    elseif($extension === "py"){
        $command = exec("python $baseDir/$file", $output);
    }
    elseif($extension === "php"){
        $command = exec("php $baseDir/$file", $output);
    }
    elseif($extension === "java"){
        $command = exec("php $baseDir/$file", $output);
    }
    else{
        $command = exec("echo '$file type is not supported'", $output);
    }
}

$result = print_r($output);

//perform test
foreach($output as $out){

}

echo json_encode($output)
?>