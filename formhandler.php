<?php
$name = $_POST['name'];
$visitor_mail = $_POST['email'];
$subject= $_POST['subject'];
$message = $_POST['mesaage'];

$email_from = 'info@imsec5604@gmail.com';
$email_subject ='new form submission';
$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "user Message: $message.\n";

$to = 'vishubhardwaj@gmial.com';

$headers = "From: $email_fron \r\n";

$headers .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>