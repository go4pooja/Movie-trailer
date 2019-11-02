<?php 
 
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('b2bmoviez@gmail.com')
  ->setPassword('K@ntanath5')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wow Subject'))
  ->setFrom(['b2bmoviez@gmail.com' => 'B2B Movies'])
  ->setTo(['nehanano1308@gmail.com' => 'neha singh'])
  ->setBody('chutiya')
  ;

// Send the message
$result = $mailer->send($message); ?>