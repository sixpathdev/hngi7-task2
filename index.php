<?php
// Comment the line below to see error messages
error_reporting(0);


include("function.php");


$baseDir = 'scripts';
$files = scandir($baseDir, 1);
array_splice($files, count($files) - 2, 2);
$first_array = [];
// ID Message Status


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
    
//get the current page number
//     $page = isset($_GET["page"]) ? $_GET(["page"]) : 1;

//     // length of files we want per page
//     $length = 50;
    
//     $files_length = count($files);
//     //calculate the start and end
//     $start = ($page - 1) * $length;
//     $end = $start + $length;
    
//     $has_previous = $start > 0;
//     $has_next = count($files) > $end;
    
//     $next_link = $has_next ? "?page=".($page + 1) : "";
//     $prev_link= $has_previous ? "?page=".($page - 1) : "";
    
//     //splice the array to get the required section
//     $files = array_slice($files, $start, $end);
   ?>

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
                                    <span style="font-size: 18px;" class="font-weight-bold text-dark">@Zero</span>
                                    <br />
                                    <span style="font-size: 12px; font-weight: 700;">Team Lead</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span style="font-size: 18px;" class="font-weight-bold text-dark">@Viviydesign</span><br />
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

<tr class="row">
    <td class="col-1 col-md-1 text-center" style="background: white;"><?php echo $i + 1; ?></td>
    <td class="col-3 col-md-2" style="background: white;"><?php echo $list[$i]['name']; ?></td>
    <td class="col-5 col-md-7" style="background: white;font-size: 14px;"><?php echo $output; ?></td>
    <td class=" col-3 col-md-2 text-center" style="background-color: <?php echo $list[$i]['status'] == 'Fail' || $list[$i]['status'] == '' ? 'red' : 'green' ?>; <?php echo $status == 'Fail' ? 'color:white;' : 'color:white;' ?> padding: 2px 15px;">
        <span><?php echo $status == '' ? 'Fail' : $status ?></span>
    </td>
</tr>
                  
        <?php } ?>
                </tbody>
            </table>
<!--             <div class="d-flex justify-content-between">
                <a href="<?php echo $prev_link; ?>" <?php echo ($has_prev) ? "" : "disabled"; ?> class="btn btn-primary btn-sm">Previous</a>
                <a href="<?php echo $next_link; ?>" <?php echo ($has_next) ? "" : "disabled"; ?> class="btn btn-primary btn-sm">Next</a>
            </div> -->
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>
   <?php }  ?>
