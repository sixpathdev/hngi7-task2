<?php
function hello($langauge){
    $full_name = "Shokunbi Abdulfatah";
    $hngi7_id = "HNG-02499";
    $email = "shokunbiaa@gmail.com";
    $output = " Hello World,". " this is " . $full_name . " with HNGi7 ID " . $hngi7_id . " using ". $langauge . " for stage 2 task";
    return $output;
}
echo hello("PHP");
