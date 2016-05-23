<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Женская одежда</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<?php 
include("header.php");
?>
<div class="jenm">
<ul>
<h3>Женская одежда</h3>
<li class="jeno"><a href="jenodej.php">Блузы</a></li>
<li class="jeno"><a href="jenodej.php">Бриджи и капри</a></li>
<li class="jeno"><a href="briuki.php">Брюки</a></li>
<li class="jeno"><a href="jenodej.php">Головные уборы</a></li>
<li class="jeno"><a href="jenodej.php">Джемперы</a></li>
<li class="jeno"><a href="jenodej.php">Джинсы</a></li>
<li class="jeno"><a href="jenodej.php">Жилеты</a></li>
<li class="jeno"><a href="jenodej.php">Кардиганы</a></li>
<li class="jeno"><a href="jenodej.php">Комбинезоны</a></li>
<li class="jeno"><a href="jenodej.php">Костюмы спортивные</a></li>
<li class="jeno"><a href="jenodej.php">Лосины</a></li>
<li class="jeno"><a href="jenodej.php">Платья</a></li>
<li class="jeno"><a href="jenodej.php">Туники</a></li>
<li class="jeno"><a href="jenodej.php">Футболки</a></li>
<li class="jeno"><a href="jenodej.php">Юбки</a></li>
<li class="jeno"><a href="jenodej.php">Шорты</a></li>
</ul>
</div>

<?php
	include("connection.php");
	
	$result = mysql_query("SELECT * FROM odejda WHERE id=13");
	$row = mysql_fetch_array($result);
	echo "<div class='briuki1'><p>
 	<img src='".$row['picture1']."'>
	<h3>".$row['imya']."</h3>
 	<h4>".$row['cena']."тг</h4>
	</p></div>";
	
	$result = mysql_query("SELECT * FROM odejda WHERE id=14");
	$row = mysql_fetch_array($result);
	echo "<div class='briuki2'><p>
	<img src='".$row['picture2']."'>
	<h3>".$row['imya']."</h3>
 	<h4>".$row['cena']."тг</h4>
	</p></div>";
	

			
         
	mysql_close($con);
?>
  
</body>
</html>
