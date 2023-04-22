<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message= $_POST['message'];
$to = 'rajeevdash07@gmail.com';
$subject = 'ACM Enquiry';
$message =  "Full Name: ".$full_name."\nEmail: ".$email."\nMessage: ".$message;;
$headers = 'From: '.$_POST['email'];

if(mail($to, $subject, $message, $headers)) {
   echo 'Your message has been sent successfully.';
} else {
   echo 'An error occurred while sending the message.';
}
?>