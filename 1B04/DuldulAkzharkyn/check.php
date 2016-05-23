<?php
include("connection.php");
$username = $_GET['username'];
$password = $_GET['password'];


$result = mysql_query("SELECT * FROM users WHERE Username = '".$username."' ");

$row = mysql_fetch_array($result);

if($row['Password'] == md5($password))
{
	session_start();
	$_SESSION['username'] = $row['Username'];

    if($row['Admin'] == true)
		header("Location: add_clothes.php");
	else 
		header("Location: myaccount.php?login=true");
}
else header("Location: myaccount.php?login=false"); 
?>
