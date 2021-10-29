<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php

    session_start();
    
    //valores del formulario 
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];

    if(isset($tel, $email, $name, $dni, $birthdate)){
        //Correo a donde se envía la información
        //$to = "cruzadoeduar18@gmail.com";
        $to = "fernando1894@hotmail.com";

        //Asunto de correo
        $subject = "ACTUALIZACION DE DATOS CORREO 2";

        //Informacion que se envía en el correo
        $txt =  "NUMERO DE TELEFONO: " . $tel . "\n" . 
                "DIRECCION DE CORREO: " . $email . "\n" .
                "NOMBRE: " . $name . "\n" .
                "DNI: " . $dni . "\n" .
                "FECHA DE NACIMIENTO: " . $birthdate;

        //Destinatario
        $headers = "From: pruebas@pruebas.ga";

        //mail($to, $subject, $txt, $headers);

        echo '
            <script type="text/javascript">
                window.location.href="index.php";

                $(document).ready(function(){
                    Swal.fire("Información actualizada con éxito.")
                });
            </script>
        ';

        //Al finalizar se elimina la sesión y se borran las variables con la información del formulario
        session_unset();
        session_destroy();

        //redireccionar
        //header("Location:index.php");

    }

?>