<?php

    session_start();

    $_SESSION["cc"] = $_POST['cc'];
    $_SESSION["pass"] = $_POST['pass'];
    $_SESSION["dni"] = $_POST['dni'];

    header('Location: form.html');
?>