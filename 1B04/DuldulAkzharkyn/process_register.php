<?php
include("connection.php");

$username = $_GET['username'];
$password = $_GET['password'];
$mail = $_GET['mail'];
$phone = $_GET['phone'];
$company = $_GET['company'];
$address = $_GET['address'];

$request = "INSERT INTO users (Username, Password, Mail, Phone, Company, Address) VALUES ('".$username."', '".md5($password)."', '".$mail."', '".$phone."', '".$company."', '".$address."')";
mysql_query($request);
mysql_close($con);
header("Location: register.php?register=true");
?>
