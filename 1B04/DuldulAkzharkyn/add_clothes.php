<?php
session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MARAIZ.kz</title>

<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<?php 
				include("header.php");
			?>           
     
       
     
		<form action="add_clothes_process.php" method="post" enctype="multipart/form-data">
		
			<div class="form_row">
                    <label class="contact"><strong>Раздел</strong></label>
                    <select class="contact_input" name="karegoriya">
						<option value=""></option>
						<option value="женская одежда">женская одежда</option>
						<option value="мужская одежда">мужская одежда</option>
						<option value="женские аксессуары">женские аксессуары</option>
						<option value="мужские аксессуары">мужские аксессуары</option>
						<option value="сумки">сумки</option>
						<option value="распродажа">распродажа</option>
					</select>
                </div> 
			<div class="form_row">
               <label class="contact"><strong>Категория:</strong></label>
               <input type="text" class="contact_input" name="karegoriya" />
            </div>
			
			<div class="form_row">
               <label class="contact"><strong>Цена:</strong></label>
               <input type="text" class="contact_input" name="cena" />
            </div>  
			
			<div class="form_row">
                   <label class="contact"><strong>Имя:</strong></label>
                   <textarea class="contact_textarea" cols="30" rows="7" name="imya"></textarea>
            </div> 
			
		  
				<div class="form_row">
                    <label class="contact"><strong>Picture1:</strong></label>
                    <input type="file" class="contact_input" name="file1" id="file1" />
                </div> 
				<div class="form_row">
                    <label class="contact"><strong>Picture2:</strong></label>
                    <input type="file" class="contact_input" name="file2" id="file2" />
                </div> 
				
				
				<div class="form_row">
                    <input type="submit" class="register" value="add clothes" />
                </div> 

		</form>
		<div>
			<?php
			if(isset($_GET['insert']))
				$insert = $_GET['insert'];
				if(isset($insert))
				{
				 	if($insert == 'true') 
						echo "<span style='color:red'>Added successful</span>";
					else if($insert == 'false')
						echo "<span style='color:red'>Error while adding</span>";
				}
			?>
		</div>
<body>
</body>
</html>
