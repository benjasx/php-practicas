<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Listados</title>
</head>
<body>
    <h1>Cursos</h1>
    <?php 
        $conexion = mysqli_connect("localhost","root","root","base1") or
        die("Error en la conexion");

        $cursos = mysqli_query($conexion,"SELECT * FROM cursos") or
        die("Peoblemas con el select" . mysqli_error($conexion));


        while($curso = mysqli_fetch_array($cursos)){
            echo $curso['id']."-"." Curso " .  $curso['nombre'] . "</br>";
        }

    ?>
</body>
</html>