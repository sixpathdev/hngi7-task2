<?php
            function greet_hng($name,$hng_id,$language,$email){
                
                $output = "Hello world,this is ".$name." with HNGi7 ID: ".$hng_id." using language "
                .$language." for stage 2 and ".$email ;
                return $output;
            }
             
             echo  greet_hng("OWOEYE SAMUEL","HNG-02249","PHP",'Owoeye1321@gmail.com');


?>
