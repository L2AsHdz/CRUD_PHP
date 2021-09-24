<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <ul>
        <li><a href="index.php">Agregar contacto</a></li>
        <li><a href="./view/listContactos.php">Ver agenda</a></li>
    </ul>

    <h3>Agregar nuevo contacto</h3>

    <div class="container size-container">
        <form id="formulario" action="controller/addContacto.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del contacto">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido del contacto">
            <label for="tel">No. de telefono:</label><br>
            <input type="text" id="tel" name="tel" placeholder="No telefono">
            <button type="submit" class="button">Agregar</button>
        </form>
    </div>

    <script src="js/validaciones.js"></script>
</body>
</html>