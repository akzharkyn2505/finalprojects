<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Юбки</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<?php 
include("header.php");
?>

</head>

<body>
<div class="jenm">
<ul>
<h3>Женская одежда</h3>
<li class="jeno"><a href="bluzy.php">Блузы</a></li>
<li class="jeno"><a href="kapri.php">Бриджи и капри</a></li>
<li class="jeno"><a href="briuki.php">Брюки</a></li>
<li class="jeno"><a href="gol.php">Головные уборы</a></li>
<li class="jeno"><a href="jenodej.php">Джемперы</a></li>
<li class="jeno"><a href="djinsy.php">Джинсы</a></li>
<li class="jeno"><a href="jilety.php">Жилеты</a></li>
<li class="jeno"><a href="jenodej.php">Кардиганы</a></li>
<li class="jeno"><a href="jenodej.php">Комбинезоны</a></li>
<li class="jeno"><a href="jenodej.php">Костюмы спортивные</a></li>
<li class="jeno"><a href="losiny.php">Лосины</a></li>
<li class="jeno"><a href="platya.php">Платья</a></li>
<li class="jeno"><a href="jenodej.php">Туники</a></li>
<li class="jeno"><a href="jenodej.php">Футболки</a></li>
<li class="jeno"><a href="iubki.php">Юбки</a></li>
<li class="jeno"><a href="worty.php">Шорты</a></li>
</ul>
</div>




<?php
	include("connection.php");
	
	$result = mysql_query("SELECT * FROM odejda WHERE id=4");
	$row = mysql_fetch_array($result);
	echo "<div class='bluz1'><p>
 	<img src='".$row['picture1']."'>
	<h3>".$row['imya']."</h3>
 	<h4>".$row['cena']."тг</h4>
	</p></div>";
	
	$result = mysql_query("SELECT * FROM odejda WHERE id=5 ");
	$row = mysql_fetch_array($result);
	echo "<div class='bluz2'><p>
	<img src='".$row['picture1']."'>
	<h3>".$row['imya']."</h3>
 	<h4>".$row['cena']."тг</h4>
	</p></div>";
	
	$result = mysql_query("SELECT * FROM odejda WHERE id=6 ");
	$row = mysql_fetch_array($result);
	echo "<div class='bluz3'><p>
	<img src='".$row['picture1']."'>
	<h3>".$row['imya']."</h3>
 	<h4>".$row['cena']."тг</h4>
	</p></div>";
	
	$result = mysql_query("SELECT * FROM odejda WHERE id=17 ");
	$row = mysql_fetch_array($result);
	echo "<div class='bluz4'><p>
 	<img src='".$row['picture1']."'>
	<h3>".$row['imya']."</h3>
 	<h4>".$row['cena']."тг</h4>
	</p></div>";
	
	$result = mysql_query("SELECT * FROM odejda WHERE id=2 ");
	$row = mysql_fetch_array($result);
	echo "<div class='bluz5'><p>
	<img src='".$row['picture1']."'>
	<h3>".$row['imya']."</h3>
 	<h4>".$row['cena']."тг</h4>
	</p></div>";
	
	$result = mysql_query("SELECT * FROM odejda WHERE id=3 ");
	$row = mysql_fetch_array($result);
	echo "<div class='bluz6'><p>
	<img src='".$row['picture1']."'>
	<h3>".$row['imya']."</h3>
 	<h4>".$row['cena']."тг</h4>
	</p></div>";
	
	?>

</body>
</html>
