<? php


require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('go4alia786@gmail.com')
  ->setPassword('Shriram5')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);



function pooja($email, $token){

global $mailer;
$body = '<!DOCTYPE html>
<head>
<title>emailverr</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<center><p>Thank you for signing in. Please click on the link below</p>
	<button><a href="http://localhost/B2B%20Movies/index.html?token='.$token.'"><strong>VERIFY</strong></a></button></center>
</body</html>';

/ Create a message
$message = (new Swift_Message('Please verify your email address'))
  ->setFrom(['go4alia786@gmail.com' => 'alia roy'])
  ->setTo($userEmail)
  ->setBody($body, 'text/html')
  ;

// Send the message
$result = $mailer->send($message);
}
?>
