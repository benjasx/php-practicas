<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARGAS</title>
</head>
<body>
<?php

  $conexion = mysqli_connect("localhost","root","root","base1") or
    die("error en la coneccion");  

    mysqli_query($conexion, "INSERT INTO cursos(nombre) values ('$_REQUEST[nombre]')") or
    die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo '<script language="javascript">alert("CURSO AGREGADO");window.location.href="pagina1.php"</script>';
?>
</body>
</html>