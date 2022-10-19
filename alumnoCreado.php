<?php
    require 'instituto.php';
    session_start();
    $nuevoAlumno = new Alumno($_POST['nombre'], $_POST['apellidos'], $_POST['dni'], $_POST['direccion'], $_POST['email']);

    array_push($_SESSION["alumno"], $nuevoAlumno);

    header('Location:alumnolista.php')
?>