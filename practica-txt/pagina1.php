<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIXXA</title>
</head>
<body>
    <h1>Pedido de PIXXA $99.00</h1>
    <form action="pagina2.php" method="POST">
        <input type="text" name="nombre" placeholder="Ingresa tu nombre">
        <input type="text" name="direccion" placeholder="Direccion">
        <h3>Cantidad de pizzas:</h3>
        <select name="cantidad">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br>
        <h3>Selecciona tus ingredientes que quieras, son gratis 😋</h3>
        <input type="checkbox" name="Peperoni">Peperoni
        <input type="checkbox" name="Salchicha">Salchicha
        <input type="checkbox" name="Salami">Salami
        <input type="checkbox" name="Jamon">Jamon
        <input type="checkbox" name="Camarones">Camarones
        <input type="checkbox" name="Carnes">Carnes

        <h3>Selecciona tus BEBIDAS</h3>
        <input type="checkbox" name="Coca">Coca-cola 3L $50 <br>
        <input type="checkbox" name="Pepsi">Pepsi 3L $45 <br>
        <input type="checkbox" name="Caguama">Caguama $35 <br><br>

        <input type="submit" value="Realizar pedido">
    </form>
</body>
</html>