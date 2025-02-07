<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <h1>COMPRA DE BOLETOS</h1>
    <h2>FORMULARIO DE VENTAS</h2>
    <form class = "boleto" action= "guardar.php" method= "POST">
        <label for= "boleto">Boleto</label>
        <input type= "number" id= "boleto" name="boleto" maxleng="6" required><br><br>

        <label for= "pelicula">pelicula</label>
        <input type= "text" id= "pelicula" name="pelicula" maxleng="40" required><br><br>
        
        <button class ="submit" type="submit">Reservar boletos</button>
    </form>
</body>
</html>