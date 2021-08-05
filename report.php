<?php
  // Gets inputs from form
  $name = $_POST["firstname"] . " " . $_POST['lastname'];
  $how_many = $_POST['howmany'];
  $what_they_did = $_POST['whattheydid'];
  $when_it_happened = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $alien_description = $_POST['aliendescription'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  $other = $_POST['other'];
  $to = 'jcolon@cpp.edu';
  $subject = 'Aliens Abducted me - Abduction Report';

  // Formats message for email
  $msg = "$name was abducted $when_it_happened and was gone for $how_long. \n" .
         "Number of aliens: $how_many \n" .
         "Alien Description: $alien_description \n" .
         "What they did: $what_they_did \n" .
         "Fang spotted: $fang_spotted \n" .
         "Other comments: $other";

   // Method to send email. Takes four arguments
   mail($to, $subject, $msg, 'From:' . $email);

  // Confirmation page
  echo "Thanks for submitting the form.<br />";
  echo "You were abducted " . $when_it_happened;
  echo "and were gone for " . $how_long . "<br />";
  echo "Number of aliens: " . $how_many . "<br />";
  echo "Alien Description: " . $alien_description . "<br />";
  echo "The aliens did this: " . $what_they_did . "<br />";
  echo "Was Fang there? " . $fang_spotted . "<br />";
  echo "Other comments: " . $other . "<br />";
  echo "Your email address is " . $email;



?>
