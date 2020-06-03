<?php

class Jide {

    public $name;
    public $id;
    public $language;
    public $email;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }

    function set_id($id) {
        $this->id = $id;
      }
      function get_id() {
        return $this->id;
      }

      function set_language($language) {
        $this->language = $language;
      }
      function get_language() {
        return $this->language;
      }

      function set_email($email) {
        $this->email = $email;
      }
      function get_email() {
        return $this->email;
      }


  }
  
  $member = new Jide();
  $member->set_name('Oladejo Olajide');
  $member->set_id('HNG-00248');
  $member->set_language('PHP');
  $member->set_email('programmerolajide@gmail.com');
  
  $name = $member->get_name();
  $id = $member->get_id();
  $language = $member->get_language();
  $email = $member->get_email();

  echo 'Hello World, this is '.$name.' with HNGi7 ID '.$id.' using '.$language.' for stage 2 task';
 

?>
