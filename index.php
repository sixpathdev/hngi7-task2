<?php

if(isset($_GET["json"])) {
//    if(copy("scripts/sixpathdev_intern.js", "scripts/sixpathdev_intern.js.txt")) {
    // $contents = file_get_contents("scripts/sixpathdev_intern.js.txt");
    // $er = preg_split("/[\s,]+/", $contents);
    // var_dump($er[12]);
//     // echo($er)[12];
    
// } 
// } 
// else {

header('Content-Type: application/json');
$baseDir = 'scripts';
$files = scandir($baseDir, 1);
array_splice($files, count($files) - 2, 2);
$first_array = [];
// $final_array = [];

foreach ($files as $file) {
    if (preg_match("/^.*\.(js|py|php)$/i", $file)) {
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        if ($extension == 'php') {
            http_response_code(200);
            $message = shell_exec("php $baseDir/$file");
            copy("$baseDir/$file", "$baseDir/$file.txt");
            $contents = file_get_contents("$baseDir/$file.txt");
            $data = preg_split("/[\s,]+/", $contents);
            if (preg_match("/HNGi7 ID|Hello World|stage 2 task,/", $message)) {
                $status = 'Pass';
            } else {
                $status = 'Failed';
            }
            // array_push($first_array, array("name"=> "$email[3] $email[4]","output" => "$message", "status"=>"$status"));
            array_push($first_array, array("file"=>$file, "output" => "$message", "name"=> "$data[3] $data[4]", "id"=>"$data[6]", "status"=>"$status"));

            $info = array('file' => "$file", 'output' => "$message", 'name' => 'Christy Caleb', 'language' => 'PHP', 'status' => "$status");
            $command = json_encode($info);
            unlink("$baseDir/$file.txt");
        } elseif ($extension == 'js') {
            http_response_code(200);
            $message = shell_exec("node $baseDir/$file");
            copy("$baseDir/$file", "$baseDir/$file.txt");
            $contents = file_get_contents("$baseDir/$file.txt");
            $data = preg_split("/[\s,]+/", $contents);
            if (preg_match("/HNGi7 ID|Hello World|stage 2 task,/", $message)) {
                $status = 'Pass';
            } else {
                $status = 'Failed';
            }
            // array_push($first_array, array("name"=> "$email[3] $email[4]","output" => "$message", "status"=>"$status"));
            array_push($first_array, array("file"=>$file, "output" => "$message", "name"=> "$data[3] $data[4]", "id"=>"$data[8]", "status"=>"$status"));

            $info = array('file' => $file, 'output' => $message, 'email' => $email[12], 'language' => 'Javascript', 'status' => "$status");
            // $command = json_encode($first_array, TRUE);
            unlink("$baseDir/$file.txt");
        } else if ($extension == 'py') {
            http_response_code(200);
            $message = shell_exec("python3 $baseDir/$file");
            copy("$baseDir/$file", "$baseDir/$file.txt");
            $contents = file_get_contents("$baseDir/$file.txt");
            $data = preg_split("/[\s,]+/", $contents);
            if (preg_match("/HNGi7 ID|Hello World|stage 2 task,/", $message)) {
                $status = 'Pass';
            } else {
                $status = 'Failed';
            }
            array_push($first_array, array("file"=>$file, "output" => "$message", "name"=> "$data[2] $data[3]", "id"=>"$data[6]", "status"=>"$status"));

            $info = array('file' => "$file", 'output' => $message, 'name' => 'Ola Samuel', 'language' => 'Python', 'status' => $status);
            $command = json_encode($info) . ",";
            unlink("$baseDir/$file.txt");
        } else {
            http_response_code(404);
            $command = "Not found";
        }
    }
    // echo $command . "\n";
}

echo json_encode($first_array);
}
