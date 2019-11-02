<?php

$host="localhost";
$user="root";
$password="";
$dbname="user verification";
$con=new mysqli($host,$user,$password,$dbname); 
if($con->connect_error){
	die('database error:'.$con->connect_error);
echo '<h1>Not Connected to Mysql</h1>';
}

?>