<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <ul>
        <li><a href="../index.php">Agregar contacto</a></li>
        <li><a href="listContactos.php">Ver agenda</a></li>
    </ul>

    <h3>Editar contacto</h3>

    <?php
        include_once("../data/ContactoDAO.php");
        $dao = new ContactoDAO();
        $contacto = $dao->read($_GET['id']);
    ?>

    <div class="container size-container">
        <form id="formulario" action="../controller/updateContacto.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="hidden" id="id" name="id" value="<?php echo $contacto->getId(); ?>">
            <input type="text" id="nombre" name="nombre" value="<?php echo $contacto->getNombre(); ?>">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="<?php echo $contacto->getApellido(); ?>">
            <label for="tel">No. de telefono:</label><br>
            <input type="text" id="tel" name="tel" value="<?php echo $contacto->getTelefono(); ?>">
            <button type="submit" class="button">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>