<?php
    function hngi7_details() {
        $details = array(
            "name" => "Precious Usanga",
            "email" => "preciousuanga001@gmail.com",
            "hng_id" => "HNG-03113",
            "language" => "PHP"
        );

        return 
        "Hello World, this is " . $details['name'] . " with HNGi7 ID " . $details['hng_id'] . " using " . $details['language'] . " for stage 2 task email " . $details['email'];
    }
    echo hngi7_details();
?>