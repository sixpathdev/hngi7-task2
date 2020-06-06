<?php
class User {
  // Properties
  public $name;
  public $email;
  public $id;
  public $language;

  // Methods
 

  function __construct($name, $id, $email, $language)
  {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->language = $language;
   }

   function __destruct()
   {
       echo "Hello World, this is " . $this->name . " with HNGi7 ID " . $this->id . " using " . $this->language . " for stage 2 task email " . $this->email;
   }

}

$zero = new User("Abdullahi Jimoh", "HNG-00160", "abdullahij951@gmail.com", "PHP");

