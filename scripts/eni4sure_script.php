<?php

	$details = array();
	$details['fullname'] = "Eniola Osabiya";
	$details['id'] = "HNG-00143";
	$details['email_address'] = "eosabiya@gmail.com";
	$details['language_used'] = "PHP";

	$message = "Hello World, this is ". $details['fullname'] ." with HNGi7 ID ". $details['id'] ." using ". $details['language_used'] ." for stage 2 task";

	echo($message);
?>