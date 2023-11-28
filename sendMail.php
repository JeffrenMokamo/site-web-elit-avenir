<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    function envoiM($fromMail, $fromName, $suject, $msg){

        $mail = new PHPMailer(true);
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'jeffrenmokamo726@gmail.com';                     //SMTP username
        $mail->Password   = 'zbvwzrsvvdyctuib';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                     //Enable implicit TLS encryption
        $mail->Port       = 465; 

        $mail->setFrom($fromMail, $fromName);
        $mail->addAddress('jeffrenmokamo726@gmail.com', 'jeffren');
        $mail->addReplyTo($_POST['mail'], '');

        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $suject;
        $mail->Body    = $msg;
        // $mail->setLanguage = ('fr', '/optional/path/to/language/directory');

        if($mail->send()){
            return true;
        }else{
            return false;
        }
    }

    if(envoiM($_POST['mail'],$_POST['nom'],$_POST['sujet'],$_POST['msg'])){
        header('location:contact.php');
        echo '<script>alert(\'votre mail a bien été envoyé\')</script>';
    }
    else{
        header('location:contact.php');
        echo '<script>alert(\'Echec\')</script>';
    }

?>