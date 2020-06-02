
<?PHP 

$baseDir = '.\scripts';

$files = scandir($baseDir, 1);

array_splice($files, count($files) - 2, 2);

foreach($files as $file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    if($extension == 'js'){
        http_response_code(200);
        $command = shell_exec("node $baseDir/$file");
    }else if($extension == 'py'){
        http_response_code(200);
        $command = shell_exec("python $baseDir/$file");
    }else if($extension == 'php'){
        http_response_code(200);
        $command = shell_exec("php $baseDir/$file");
    }else{
        http_response_code(404);
        $command = "Not found";      
    }
    header('Content-Type: application/json');
    echo json_encode([$command]);
}







