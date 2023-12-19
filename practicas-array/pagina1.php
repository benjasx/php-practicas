<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $dias = array("Lunes","Martes","Miercoles","Jueves","Viernes", "Sabadito", "Domingito");
        echo count($dias);
        echo "<br>";
        foreach($dias as $dia){
            echo "😐 ". $dia;
            echo "<br>";
        }

        for($i = 0; $i < count($dias); $i++){
            if($dias[$i]=== $dias[count($dias)-1] || $dias[$i]=== $dias[0]){
                echo $dias[$i];
                echo "<br>";
            }   
        }
    ?>
</body>
</html>