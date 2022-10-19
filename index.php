<?php
      require 'alumnos.php';
      session_start();

      if(!isset($_SESSION['alumno'])){ //array alumno definido y es null
        //jfkds
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Instituto</title>
    </head>
    <body>
    <h1>Instituto</h1>
    <form action="listadoAlumnos.php" method="post">
        <input type="submit" value="Alumnos"/>
    </form>
</body>
</html>