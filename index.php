<?php
// Comment the line below to see error messages
error_reporting(0);


$baseDir = 'scripts';
$files = scandir($baseDir, 1);
array_splice($files, count($files) - 2, 2);
$first_array = [];
// ID Message Status

function fetch_data()
{
    global $baseDir;
    global $files;
    global $first_array;
    foreach ($files as $file) {
        if (preg_match("/^.*\.(js|py|php)$/i", $file)) {
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            if ($extension == 'php') {
                $message = shell_exec("php $baseDir/$file");
                set_array($message, $file);
                flush();
            } elseif ($extension == 'js') {
                http_response_code(200);
                $message = shell_exec("node $baseDir/$file");
                set_array($message, $file);
                flush();
            } else if ($extension == 'py') {
                http_response_code(200);
                $message = shell_exec("python3 $baseDir/$file");
                set_array($message, $file);
                flush();
            } else {
                http_response_code(404);
                $command = "Not found";
            }
        }
        // echo $command . "\n";
    }
    return $first_array;
}



function get_string_data($str, $starting_word, $ending_word)
{
    // get index of the first character of the first instance of $starting_word
    $substring_start = strpos($str, $starting_word);

    // get the length of the $starting_word added to the index derived to get the index of its last character
    $substring_start += strlen($starting_word);
    $size = strpos($str, $ending_word, $substring_start) - $substring_start;
    $result = substr($str, $substring_start, $size);
    return $result;
}

function get_email($str)
{
    $email_index = strpos($str, "email");
    $email_index += strlen("email") + 1;
    $result = substr($str, $email_index);

    // $cut_word = substr($str, 0, $email_index);
    return $result;
}

function set_array($message, $file)
{
    global $first_array;
    http_response_code(200);
    $email = get_email($message);
    $message = substr($message, 0, strpos($message, "email") - 1);

    // echo $message;
    $name = get_string_data($message, ' is ', ' with ');
    $language = get_string_data($message, ' using ', ' for ');
    $id = get_string_data($message, ' ID ', ' using ');
    // die($id);
    

    $msg_layout = "Hello World, this is " . $name . " with HNGi7 ID " . $id . " using " . $language . " for stage 2 task";
    // echo strcasecmp($message, $msg_layout);
    if (strcmp($message, $msg_layout) == 0) {
        $status = 'Pass';
    } else {
        $status = 'Fail';
    }

    if(explode("-", $id)[0] == "HNG") {
        $status = 'Pass';
    } else {
        $status = 'Fail';
    }

    // array_push($first_array, array("name"=> "$email[3] $email[4]","output" => "$message", "status"=>"$status"));
    array_push($first_array, array("file" => $file, "output" => "$message", "name" => "$name", "email" => "$email", "id" => "$id", "language" => "$language", "status" => "$status"));
}


if (isset($_GET["json"])) {

    header('Content-Type: application/json');
    $file_list = fetch_data();
    $pass_array = [];

    for ($i = 0; $i < count($file_list); $i++) {
        if ($file_list[$i]['status'] != "Fail") {
            array_push($pass_array, $file_list[$i]);
        } else {
            continue;
        }
    }

    echo json_encode($pass_array);
} else {
    $list = fetch_data();

    echo "<table border='2' align='center'>
        <thead>
            <th>HNGi7 ID</th>
            <th>Output</th>
            <th>Status</th>
        </thead>
        <tbody>";

    for ($i = 0; $i < count($list); $i++) {
        $id = $list[$i]['id'];
        $output = $list[$i]['output'];
        $status = $list[$i]['status'];
        echo "<tr>
            <td>{$id}</td>
            <td>{$output}</td>
            <td>{$status}</td>
        </tr>";
    }
    "</tbody>
    </table>";
}
