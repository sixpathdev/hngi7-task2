<?php
  //My first PHP code
  /**
     * variable name is my full name
     * variable ID is my HNG internship ID
     * varaible email is my email address
     * variable language is the language I used to write this code
     * 
     */
    $email = "aberefejiro@gmail.com";
    $name = "Abere Oghenefejiro";
    $ID = "HNG-02591";
    $language = "PHP";

    function intro($name, $ID, $language, $email) {
      //This is the string that would be displayed on the screen
      return ("Hello World, this is $name with HNGi7 ID $ID using $language for stage 2 task email $email");
    }
    //Output for my function
    echo intro("Abere Oghenefejiro", "HNG-02591", "PHP", "aberefejiro@gmail.com");
  ?>