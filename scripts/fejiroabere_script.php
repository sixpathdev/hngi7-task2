<?php
  //My first PHP code
  /**
     * variable fname is my full name
     * variable ID is my HNG internship ID
     * variable language is the language I used to write this code
     * varaible email is my email address
     */
    $email = "aberefejiro@gmail.com";

    function intro($fname, $ID, $language) {

      //This is the string that would be displayed on the screen
      return ("Hello World, this is $fname with HNGi7 ID $ID using $language for stage 2 task.");

    }
    
    //Output for my function
    echo intro("Abere Oghenefejiro Stephanie", "HNG-02591", "PHP");
  ?>