<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido realizado</title>
</head>
<body>
    <?php
        $total = 0.0;
        $ar = fopen("pedidos.txt", "a") or 
        die("Problemas en la creacion del archivo");
    
        fputs($ar, "\n");
        fputs($ar, "\n");

        fputs($ar, "😀---------- PEDIDO ----------😁");
        fputs($ar, "\n");


        fputs($ar, "CANTIDAD DE PIXXAS ". $_REQUEST['cantidad']."🍕🍕");
        if($_REQUEST['cantidad'] == 3){
            $total = 99.00*3;
        }elseif($_REQUEST['cantidad'] == 2){
            $total = 99.00*2;
        }else{
            $total = 99.00;
        }
        fputs($ar, "\n");


        fputs($ar, "INGREDIENTES");
        fputs($ar, "\n");
        if(isset($_REQUEST['Peperoni'])){
            fputs($ar, "\t--Peperoni");
            fputs($ar, "\n");
        }
        if(isset($_REQUEST['Salchicha'])){
            fputs($ar, "\t--Salchicha");
            fputs($ar, "\n");
        }
        if(isset($_REQUEST['Salami'])){
            fputs($ar, "\t--Salami");
            fputs($ar, "\n");
        }
        if(isset($_REQUEST['Jamon'])){
            fputs($ar, "\t--Jamon");
            fputs($ar, "\n");
        }
        if(isset($_REQUEST['Camarones'])){
            fputs($ar, "\t--Camarones");
            fputs($ar, "\n");
        }
        if(isset($_REQUEST['Carnes'])){
            fputs($ar, "\t--Carnes");
            fputs($ar, "\n");
        }


        fputs($ar, "BEBIDAS");
        fputs($ar, "\n");
        if(isset($_REQUEST['Coca'])){
            fputs($ar, "\t--Coca-cola 3 Litrotes");
            $total+= 50.00;
            fputs($ar, "\n");
        }
        if(isset($_REQUEST['Pepsi'])){
            fputs($ar, "\t--Pepsi 3L");
            $total+= 45.00;
            fputs($ar, "\n");
        }
        if(isset($_REQUEST['Caguama'])){
            fputs($ar, "\t--Caguama 1L");
            $total+= 35.00;
            fputs($ar, "\n");
        }

        fputs($ar, "DIRECCION DE ENTREGA");
        fputs($ar, "\n");
        fputs($ar, $_REQUEST['direccion']);
        fputs($ar, "\n");
        fputs($ar, "A NOMBRE DE ". $_REQUEST['nombre']);
        fputs($ar, "\n");
        fputs($ar, "\n");
        fputs($ar, "TOTAL A PAGAR $".$total);

        fputs($ar, "\n");
        fputs($ar, "------------------------------------------------------------------");
        fputs($ar, "\n");
        fputs($ar, "------------------------------------------------------------------");
        fputs($ar, "\n");
        fclose($ar);
        echo "PEDIDO REALIZADO 🤗";
    ?>
</body>
</html>