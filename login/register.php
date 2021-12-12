<?php

    /**
     * Post Body prüfen
     */
    if(empty($_POST["name"]) || empty($_POST["surname"]) || empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["pass"])|| empty($_POST["tel"]))
    {
        //es gibt ein Problem
        return;
    }



    /**
     * Variablen definieren
     */
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    
    $username = $_POST["username"];

    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $tel = $_POST["tel"];



    /**
     * Server-Verbindung
     */
    include("connect.php");
   



    /**
     * Duplikaten vermeiden
     */
    $anfrage        = "SELECT * FROM users WHERE email='" . $email . "' OR username='" . $username . "';";
    $result         = $verbindung->query($anfrage);

    if($result->num_rows > 0)
    {
        header("Location: registerPage.php?emailFehler=1");
        exit();
    }




    /**
     * Alles okay, jetzt Account erstellen
     */
    $anfrage        = "INSERT INTO users (`id`, `name`, `surname`, `username`, `email`, `password`, `tel`, `account_type`, `reg_date`, `ip_address`) VALUES (NULL, '" . $name . "', '" . $surname . "', '" . $username . "', '" . $email . "',  '" . $pass . "',  '" . $tel . "',  '0', '2021-12-11', '0');";

    if($verbindung->query($anfrage) === true)
    {
        
        header("Location:index.php");
    }
    else
    {
        echo("we have problem!");
    }


    /**
     * Verbindung schließen
     */
    include("close.php");

    
?>