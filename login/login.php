<?php
    if(empty($_POST["email"]) || empty($_POST["pass"]))
    {
        exit("System Error");
    }

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    include("connect.php");
    

    $anfrage        = "SELECT * FROM users WHERE email='" . $email . "'";
    $result         = $verbindung->query($anfrage);
    
    if($result->num_rows == 0)
    {
        header("Location: loginPage.php?emailFalsch=1");
        exit();
    }
    else
    {
        $account = $result->fetch_assoc();

        if($account["password"] == $pass)

        {
          
            // ERFOLGREICH EINGELOGGT. Umleitung zur Startseite

            session_start();
    
            setcookie("login", "1",  time()+10000, "/");
            setcookie("name", $account["username"],  time()+10000, "/");
            header("Location: ../Social-Media-App/index.php");

        }
        else
        {
            // PASSWORT IST FALSCH
            header("Location: loginPage.php?pwFalsch=1");
        }
    }
    
    
    include("close.php");
    
?>