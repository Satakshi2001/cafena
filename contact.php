<?php

$name = $_POST['name'];
$visitors_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'smart.rai.shashank@gmail.com';
$email_subject = 'New contact form submission';

$email_body = 'User Name : $name. \n'
               'User Email : $visitors_email \n'
               'Message : $message \n';


$to = 'shashank.20747@knit.ac.in';

mail($to,$email_subject,$email_body)




?>