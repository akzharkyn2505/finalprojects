<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
include("connection.php");
$text = $_GET['request'];
$result = mysql_query("select * from odejda where razdel like '%".$text."%'");
while($row=mysql_fetch_array($result)){
	echo "<a href='".$row['picture1']."' class='searchresult' style='clear:both;'>".$row['imya']."</a><br/>";
}
?>
