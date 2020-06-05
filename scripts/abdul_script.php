<?php
function Hngi7_intro(){
    $full_name = "Shokunbi Abdulfatah";
    $hngi7_id = "HNG-02499";
    $language = "PHP";
    $email = "shokunbiaa@gmail.com";
    $output = " Hello World,". " this is " . $full_name . " with HNGi7 ID " . $hngi7_id . " using ". $language . " for stage 2 task" . " email " . $email;
    return $output;
}
echo Hngi7_intro();
