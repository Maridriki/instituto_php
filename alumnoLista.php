<?php
    require 'alumno.php';
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border=1>
<form action='nuevoAlumno.php' method='post'>
        <input type='submit'>
    </form>
        <thead>
            <th>nombre</th>
            <th>apellidos</th>
            <th>dni</th>
            <th>direccion</th>
            <th>Controles</th>
        <thead>
        <tbody>
            <?php 
                $libros = $_SESSION['alumno']; 
                foreach ($alumnos as $i => $alumno) {
                    echo "<tr>";
                    echo "<td>" . $alumno->get_nombre() . "</td>";
                    echo "<td>" . $alumno->get_apellidos() . "</td>";
                    echo "<td>" . $alumno->get_Autor() . "</td>";
                    echo "<td>" . $alumno->get_direccion() . "</td>";

                    
                    echo
                    "<td>
                        <form action='modificaAlumno.php' method='post'>
                            <input type='submit' value='Modificar'></button>
                            <input type='hidden' name='posicionAlumno' value=".$i.">
                        </form>
                    </td>";
                    echo
                    "<td>
                        <form action='borraAlumno.php' method='post'>
                            <input type='submit' value='Borrar'></button>
                            <input type='hidden' name='posicionAlumno' value=".$i.">
                        </form>
                    </td>";

                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>