<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just Share</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7ce396367e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous">
</head>
<body>

<div class="logo">
    <img src="logo.png">
</div>
<div class="formContainer">
    
    
    <?php


       
            ?>
                
                    <img src="user.png">
                    <h1>Forgot password</h1>
                    <div>Your password will be send following E-mail addres</div>

                    <form method="POST" action="forgot.php">
                        <input type="email" placeholder="E-Mail-Address" name="email" id="email" required>
                        
                        <input type="submit" value="Send" onclick="SendForm('FrmPassword','ForgotPass');">
                    </form>
            
            
            <?php
            
            if(isset($_GET["emailWrong"]) && $_GET["emailWrong"] == "1")
            {
                echo("<span class ='info' >Password or E-mail is wrong</span >");
            }
    
            if(isset($_GET["emailFalsch"]) && $_GET["emailFalsch"] == "1")
            {
                echo("<span class='info'>Password or E-mail is wrong</span>");
            }
    


    ?>
    </div>
    
</body>
</html>