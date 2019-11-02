<?php
$host="localhost";
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password);
if(!$con){
echo '<h1>Not Connected to Mysql</h1>';
}
else {
echo '<h1>MYSQL server is connected</h1>';
}
?>
<!doctype html>
<html>
<head><title>verify</title></head>
<body><p>
Please click on the link sent via email to verify your account
THANK YOU</p></body></html>