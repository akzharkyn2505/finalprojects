<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MARAIZ.kz</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">

       <div class="header">
    <?php
    include("header.php");
    ?>            
       </div> 
       
       
     <div class="welcome">
    <?php
    if(isset($_SESSION['username'])){
      echo "<span style='float:right; color:red;'>Welcome " . $_SESSION['username']."</span>";
    }
    ?>
     </div>       
                <div class="contact_form">
                <div class="form_subtitle">login into your account</div>
                 <form name="register" action="check.php" method="GET">          
                    <div class="form_row">
                    <label class="contact"><strong>Username:</strong></label>
                    <input type="text" class="contact_input" name="username" />
                    </div>  

                    <div class="form_row">
                    <label class="contact"><strong>Password:</strong></label>
                    <input type="password" class="contact_input" name="password" />
                    </div>                     

                    <div class="form_row">
                        <div class="terms">
                        <input type="checkbox" name="terms" />
                        Remember me
                        </div>
                    </div> 

                    
                    <div class="form_row">
          <input type="submit" class="register" value="login" />
                    <a href="logout.php" class="logout"><input type="button" class="register" value="logout" /></a>
                    </div>
          <div class="form_row">   
          <?php
          $login = $_GET['login'];
          
          if(isset($login)) if($login == "true")
               echo " <label class='contact'><strong style='color:red'>Login was successful</strong></label>";
               else echo " <label class='contact'><strong style='color:red'>Login was not successful</strong></label>";
          ?>
          </div>
                  </form>     
                    
                </div>  
            
            </div>  
      
    

</div>

</body>
</html>
