<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Регистрация</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 <div class="header">
       		<?php
				include("header.php");
			?>
       </div> 
	   
	   <div class="contact_form">
                <div class="form_subtitle">Регистрация</div>
				<br></br>
                 <form name="register" action="process_register.php" method="GET">          
                    <div class="form_row">
                    <label class="contact"><strong>Логин:</strong></label>
                    <input type="text" class="contact_input" name="username"/>
                    </div>  


                    <div class="form_row">
                    <label class="contact"><strong>Пароль:</strong></label>
                    <input type="password" class="contact_input" name="password" />
                    </div> 

                    <div class="form_row">
                    <label class="contact"><strong>Почта:</strong></label>
                    <input type="text" class="contact_input" name="mail" />
                    </div>


                    <div class="form_row">
                    <label class="contact"><strong>Телефон:</strong></label>
                    <input type="text" class="contact_input" name="phone" />
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Компания:</strong></label>
                    <input type="text" class="contact_input" name="company" />
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Адрес:</strong></label>
                    <input type="text" class="contact_input" name="address" />
                    </div>                    


                    
                    <div class="form_row">
                    <input type="submit" class="register" value="register" />
                    </div>   
                  </form>    
				  <div><?php if(isset($_GET['register'])) echo "<span style='color:red'>Registration Successful</span>";?></div> 
                </div>  
            
<body>
</body>
</html>
