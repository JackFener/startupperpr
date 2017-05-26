<?php
 require_once "Mail.php";
 
 $from = "Giacomo Fava <giacomofava93@gmail.com>";
 $to = "Ramona Recipient <giacomo_fava@yahoo.it>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "smtp.gmail.com";
 $username = "giacomofava93@gmail.com";
 $password = "pinopino1";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }