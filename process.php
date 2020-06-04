<?php

$directory = __DIR__.'/scripts';

if (!is_dir($directory)) {
    exit('Invalid diretory path');
}

#loop through scripts directory
foreach (scandir($directory) as $file) {
    if ($file !== '.' && $file !== '..') {
        // $files[] = $file;
        exec('curl http://localhost/hngi7-task2/scripts/'.$file,$outputs);
    }
}