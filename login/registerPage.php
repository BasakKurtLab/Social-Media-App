<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous">
</head>
<body>
<div class="logo">
    <img src="logo.png">
</div>
    <div class="formContainer">
    
    <img src="user.png">
    <h1>Registration</h1>

    <form  method="POST" action="register.php">
        <input type="text" placeholder="Name" name="name" required>
        <input type="text" placeholder="Surname" name="surname" required>
        <input type="text" placeholder="Username" name="username" required>
        <input type="email" placeholder="E-Mail-Address" name="email" required>
        <input type="pass" placeholder="Password" name="pass" required>
        <input type="text" placeholder="Telephone" name="tel" required>
        <input type="submit" value="Sign in">
    </form>


    <?php
        if(isset($_GET["emailFehler"]) && $_GET["emailFehler"] == "1")
        {
            echo("<span >E-Mail-Address oder Username is already registered</span>");
        }
    ?>
    </div>
</body>
</html>