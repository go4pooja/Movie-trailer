<?php
session_start();
require 'config/db.php';
require_once 'vendor/autoload.php';

$errors = array();
$username = "";
$email = "";
$pass1 = "";
$pass2 = "";


//if clicked
if (isset($_POST['register'])){
	$username= $_POST['username'];
	$email= $_POST['email'];
	$pass1= $_POST['password'];
	$pass2= $_POST['cpassword'];

	//validation

if (empty($username)) {
	$errors['username']= "<h6>Username Required</h6>";
}
if (empty($email)) {
	$errors['email']= "Username Required";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
$errors['email']= "<h6>EMAIL Invalid</h6>";	
}
if (empty($pass1)) {
	$errors['password']= "<h6>Password Required</h6>";
}
if (empty($pass2)) {
	$errors['cpassword']= "<h6>Confirm Password</h6>";
}

if ($pass1 !== $pass2){
	$errors['password']= "<h6>Passwords do not match</h6>";
}

$emailquery= "SELECT * FROM users WHERE email=? LIMIT 1";
$stmt  = $con->prepare($emailquery);
$stmt->bind_param('s', $email);
$stmt->execute();
$result= $stmt->get_result();
$usercount = $result->num_rows;
$stmt->close();

if ($usercount > 0) {
	$errors['email'] = "<h4>Email already exist</h4>";
	# code...
}

if (count($errors) === 0) {
	$pass1 = password_hash($pass1, PASSWORD_DEFAULT);

	$token = bin2hex(random_bytes(50));
    $verified = false;

    $sql = "INSERT INTO users (username, email, verified, token, password) VALUES (?, ?, ?, ?, ?)";
    $stmt  = $con->prepare($sql);
$stmt->bind_param('ssbss', $username, $email, $verified, $token, $pass1);
if ($stmt->execute()){
	$user_id = $con->insert_id;
	$_SESSION['id'] = $user_id;
	$_SESSION['username'] = $username;
	$_SESSION['email'] = $email;
	$_SESSION['verified'] = $verified;

	

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('b2bmoviez@gmail.com')
  ->setPassword('K@ntanath5')
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
<center><p>Thank you for signing in. Please click on the link below :</p>
	<button><a href="http://localhost/B2B%20Movies/verify.php?token='.$token.'"><strong>VERIFY</strong></a></button></center>
</body</html>';

// Create a message
$message = (new Swift_Message('Please verify your email address'))
  ->setFrom(['b2bmoviez@gmail.com' => 'B2B Movies'])
  ->setTo($email)
  ->setBody($body, 'text/html')
  ;

// Send the message
$result = $mailer->send($message);
}

pooja($email, $token);


	$_SESSION['message'] = "login successful";
	$_SESSION['alert-class'] = "alert-success";
	header('location: verify.php');
	exit();


}
else{
	$errors['db_error'] = "Databse error: failed to register";
}
}
}





//if clicked login button
if (isset($_POST['Login'])){
	$username= $_POST['username'];
	$pass1= $_POST['password'];
	
	//validation

if (empty($username)) {
	$errors['username']= "<h6>Username Required</h6>";
}

if (empty($pass1)) {
	$errors['password']= "<h6>Password Required</h6>";
}


if (count($errors) === 0) {
	# code...

$sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";

$stmt  = $con->prepare($sql);
$stmt->bind_param('ss', $username, $pass1);
if($stmt->execute()){
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (password_verify($pass1, $user['password'])) {
	$stmt->close();
	//login success
//login user
	$_SESSION['id'] = $user['id'];
	$_SESSION['username'] = $user['username'];
	header('location: index.php');
	$_SESSION['email'] = $user['email'];
	$_SESSION['verified'] = $user['verified'];

	$_SESSION['message'] = "login hua";
	$_SESSION['alert-class'] = "alert-success";

	
	exit(0);

}
else {
	$errors['login_fail'] = "wrong credentials";
}
}
else{
	$_SESSION['message'] = "login nahi hua";
	$_SESSION['type'] = "alert-danger";
}
}
}


function verifyUser($token){

global $con;
$sql= "SELECT * FROM users WHERE token='$token' LIMIT 1";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)  > 0){

	$user = mysqli_fetch_assoc($result);
	$update_query = "UPDATE users SET verified=1 WHERE token='$token'";

	if (mysqli_query($con, $update_query)){
		//log in user
		$_SESSION['id'] = $user['id'];
	$_SESSION['username'] = $user['username'];
	$_SESSION['email'] = $user['email'];
	$_SESSION['verified'] = 1;

	$_SESSION['message'] = "Your email address was successfully verified";
	$_SESSION['alert-class'] = "alert-success";
	header('location: verify.php');
	exit();
	}

}

else{
	echo 'user not found';
}
}