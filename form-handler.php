<?php

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'madolynphotography@gmail.com';

  $email_subject = "Custom Order Request";

  $email_body = "Name: $name.\n".
                "Email: $visitor_email.\n".
                "Order Details: $message.\n";

  $to = "21glocksinem@e-hps.net";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply To: $visitor_email \r\n";

  mail($to, $email_subject, $email_body, $headers);

  header("Location: custom.html");

  ?>
