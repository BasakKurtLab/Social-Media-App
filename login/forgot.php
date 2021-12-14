<?php
    if(empty($_POST["email"]))
    {
        exit("System Error");
    }

    $email = trim($_POST["email"]);
    
    include("connect.php");
    

    $query = $verbindung->prepare("select * from users where email=?");
			 $query->execute(array($email));
			 $row =  $query->fetch(PDO::FETCH_ASSOC);	  
             $kontrol = $query->rowCount();   

             if($kontrol){
			 
                include("mail/PHPMailerAutoload.php");
          
          $mail = new PHPMailer;            
           
          $mail->IsSMTP();
          //$mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
          $mail->SMTPAuth = true;
          $mail->SMTPSecure = 'tls'; // Güvenli baglanti icin ssl normal baglanti icin tls
          $mail->Host = "smtp.gmail.com"; // Mail sunucusuna ismi
          $mail->Port = 587; // Gucenli baglanti icin 465 Normal baglanti icin 587
          $mail->IsHTML(true);
          $mail->SetLanguage("tr", "phpmailer/language");
          $mail->CharSet  ="utf-8";
          $mail->Username = "basakkurt85@gmail.com"; // Mail adresimizin kullanicı adi
          $mail->Password = "123"; // Mail adresimizin sifresi
          $mail->SetFrom("basakkurt85@gmail.com",$row["username"]); // Mail attigimizda gorulecek ismimiz
          $mail->AddAddress($email); // Maili gonderecegimiz kisi yani alici
          $mail->addReplyTo($email,$row["username"]);
          $mail->Subject = "Password Change"; // Konu basligi
          $mail->Body = "<div style='background:#eee;padding:5px;margin:5px;width:300px;'> email : ".$email."</div> <br /> onaylama linki : <br /> 
          
           http://localhost/sifre_duzenle?eposta=".$email."&kod=".$row["passCode"]."
          
          
          "; // Mailin icerigi
          if(!$mail->Send()){
          
                echo '<div style="margin-top:20px;" class="alert alert-warning">Error</div>';
          
          }else {
              
              echo '<div style="margin-top:20px;" class="alert alert-success">Email is send</div>';
              
          }
               
                
           }else {
               
 echo '<div style="margin-top:20px;" class="alert alert-warning">Email is not wrong</div>';

               
           }	  
           include("close.php");
          
          
          ?>


			