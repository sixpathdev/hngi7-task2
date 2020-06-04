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
    $checkid = get_string_data($message, ' ID ', ' using ');
    if (explode("-", $checkid)[0] == "HNG") {
        $id = $checkid;
        $msg_layout = "Hello World, this is " . $name . " with HNGi7 ID " . $id . " using " . $language . " for stage 2 task";
        // echo strcasecmp($message, $msg_layout);
        if (count(explode("@", $email)) > 1) {
            if (strcmp($message, $msg_layout) == 0) {
                $status = 'Pass';
            } else {
                $status = 'Fail';
            }
        } else {
            $status = 'Fail';
        }
    } else {
        $id = null;
    }

    // die($id);




    // if(explode("-", $id)[0] == "HNG") {
    //     $status = 'Pass';
    // } else {
    //     $status = 'Fail';
    // }

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
} else { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap" rel="stylesheet" />
        <title>Team Flash</title>
    </head>
    <style>
        tbody tr:hover {
            background-color: rgb(236, 234, 234);
            border-left: 3px solid #4f67ed;
        }
    </style>

    <body style="background-color: #f6f7fb;">
        <div class="container-fluid">
            <header class="row">
                <div style="
            font-size: 20px;
            background-color: #4f67ed;
            color: white;
            font-weight: 400;
          " class="col-3 col-md-1 py-4 px-0 text-center">
                    HNGi7
                </div>
                <nav style="font-size: 14px; background-color: white;" class="navbar navbar-expand-lg navbar-light col-9 col-md-11">
                    <a class="navbar-brand font-weight-bold" href="#">
                        <i style="color: #4f67ed;" class="fa fa-bolt"></i> Team<span style="color: #4f67ed;">Flash</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto mr-5">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span style="font-size: 18px;" class="font-weight-bold text-dark">@sixpathdev</span>
                                    <br />
                                    <span style="font-size: 12px; font-weight: 700;">Team Lead</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span style="font-size: 18px;" class="font-weight-bold text-dark">@Glowree</span><br />
                                    <span style="font-size: 12px; font-weight: 700;">Front-End Lead</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span style="font-size: 18px;" class="font-weight-bold text-dark">@David</span>
                                    <br /><span style="font-size: 12px; font-weight: 700;">DevOps Lead</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span style="font-size: 18px;" class="font-weight-bold text-dark">@fosajeff</span>
                                    <br /><span style="font-size: 12px; font-weight: 700;">Back-End Lead</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
        <div class="container mt-5">
            <h4>RESULT</h4>

            <div class="row">
            </div>
            <table class="table mt-4 bg-prima">
                <thead>
                    <tr class="row">
                        <td class="col-1 col-md-1 text-center text-muted">#</td>
                        <td class="col-3 col-md-2 text-muted">NAME</td>
                        <td class="col-5 col-md-7 text-muted">MESSAGE</td>
                        <td class="col-3 col-md-2 text-muted">STATUS</td>
                    </tr>
                </thead>
                <tbody>
                    
                <?php
                $list = fetch_data();
                for ($i = 0; $i < count($list); $i++) { 
                    $id = $list[$i]['id'];
                    $output = $list[$i]['output'];
                    $status = $list[$i]['status']; ?>
                    
                <tr class="row" style="<?php echo $status == 'Fail' ? 'background-color:red;color:white;':'background-color:green;color:white;' ?>">
                    <td class="col-1 col-md-1 text-center"><?php echo $i+1; ?></td>
                    <td class="col-3 col-md-2"><?php echo $list[$i]['name']; ?></td>
                    <td class="col-5 col-md-7"><?php echo $output; ?></td>
                    <td class="col-3 col-md-2">
                        <span style="background-color: <?php echo $status == 'Fail' ? 'red':'green' ?>; <?php echo $status == 'Fail' ? 'color:white;':'color:white;' ?> padding: 2px 15px;" class="rounded"><?php echo $status; ?></span>
                    </td>
                </tr>
        <?php } ?>
                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>
   <?php }  ?>