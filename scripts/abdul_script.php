<?php
function Hngi7_intro(){
    $email = "shokunbiaa@gmail.com";
    $full_name = "Shokunbi Abdulfatah";
    $hngi7_id = "HNG-02499";
    $language = "PHP";
    $output = " Hello World,". " this is " . $full_name . " with HNGi7 ID " . $hngi7_id . " using ". $language . " for stage 2 task";
    return $output;
}
echo Hngi7_intro();
