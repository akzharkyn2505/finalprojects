<?php
include("connection.php");
if(isset($_POST['razdel'])){

$razdel= $_POST['razdel'];
}

if(isset($_POST['karegoriya'])){
$kategoriya = $_POST['karegoriya'];}

echo $kategoriya;
if($_FILES["file1"]["error"] > 0)
	header("add_clothes.php?insert=false");
	//echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
else 
{	
	move_uploaded_file($_FILES["file1"]["tmp_name"],"images/" . $_FILES["file1"]["name"]);
} 
if($_FILES["file2"]["error"] > 0)
	header("add_clothes.php?insert=false");
	//echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
else 
{	
	move_uploaded_file($_FILES["file2"]["tmp_name"],"images/" . $_FILES["file2"]["name"]);
} 
if(isset($_POST['imya'])){

$imya = $_POST['imya'];

}
if(isset($_POST['cena'])){
$cena = $_POST['cena'];
}

$path1 ="images/". $_FILES["file1"]["name"];
$path2 = "images/" . $_FILES["file2"]["name"];
$statement = "INSERT INTO odejda ( razdel, karegoriya, picture1, picture2, imya, cena) VALUES ('razdel', '$kategoriya','$path1', '$path2', '$imya', '$cena')";

$result = mysql_query($statement);

if($result){
	header("Location: add_clothes.php?insert=true");
}
else{ 
	header("Location: add_clothes.php?insert=false");
}
mysql_close($con);
?>
