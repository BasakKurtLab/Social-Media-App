<?php include('connect.php'); ?>

<?php

    

    if(isset($_COOKIE["login"]) && $_COOKIE["login"] == "1")
    {
        $username = base64_decode($_COOKIE["name"]);

        $anfrage = "select * from `users` where `username` = '$username' ";

        $result         = $verbindung->query($anfrage);


        if(!$result){
            header("Location: formUpdate.php?Fehler=1");
        exit();
        
        }
        else{
         
                $row = mysqli_fetch_assoc($result);
                $id = $row['id'];
                

    

    }

    }
    
      

?>


    <?php

                if(isset($_POST['form_update'])){

                    if(isset($_GET['id_new'])){

                        $id_new=$_GET['id_new'];
                    }

                    

                    $name = $_POST["name"];
                    $surname = $_POST["surname"];
                    
                    $username = $_POST["username"];
                
                    $email = $_POST["email"];
                    
                    $tel = $_POST["tel"];

                    $anfrage = "update `users` set `name`='$name', `surname`='$surname', 
                   `email`='$email',  `tel`='$tel' where `id`= $id_new ";

                    $result         = $verbindung->query($anfrage);

                if($verbindung->query($anfrage) === true){
                    header('location:../index.php');
        
                 }
                else{
         
                    header("Location: formUpdate.php?Fehler=2");
                    exit();
               
    }
}
?>











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

    <div class="formContainer">
    <h1>Hallo <span><?php echo $row['username']?></span> </h1>
    <img src="../images/profil.bmp">
    

    <form  method="POST" action="formUpdate.php?id_new=<?php echo $id; ?>">
    
        <input type="text" placeholder="Name" name="name" value="<?php echo $row['name']?>">
        <input type="text" placeholder="Surname" name="surname" required value="<?php echo $row['surname']?>">
        
        <input type="email" placeholder="E-Mail-Address" name="email" required value="<?php echo $row['email']?>">
       
        <input type="text" placeholder="Telephone" name="tel" required value="<?php echo $row['tel']?>">
        <input type="submit" value="Save" name="form_update">
    </form>
    


    <?php
        if(isset($_GET["fehler"]) && $_GET["fehler"] == "1")
        {
            echo("<span >Fill in the blanks</span>");
        }
        elseif (isset($_GET["fehler"]) && $_GET["fehler"] == "2"){
            
            echo("<span> We couldn't find an account</span>");
        }
        elseif (isset($_GET["ok"]) && $_GET["ok"] == "1"){

            echo("<span> Account information updated successfully</span>");

        }
    ?>
    </div>
</body>
</html>