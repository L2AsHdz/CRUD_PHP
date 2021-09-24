<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <ul>
        <li><a href="../index.php">Agregar contacto</a></li>
        <li><a href="listContactos.php">Ver agenda</a></li>
    </ul>

    <h3>Lista de contactos</h3>
    <?php

        include_once('../data/Conexion.php');

        try {

            $pdo = Conexion::getConexion();

            $stmt = $pdo->prepare("SELECT * FROM Contacto");
            $stmt->execute();

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    ?>

    <table class= "container size-container">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            <?php while (($result = $stmt->fetch()) !== false): ?>
                <tr>
                    <td><?php echo $result[0]; ?></td>
                    <td><?php echo $result[1]; ?></td>
                    <td><?php echo $result[2]; ?></td>
                    <td><?php echo $result[3]; ?></td>
                    <td><a onclick="confirm('Esta seguro de borrar esta tarea?');" href="../controller/removeContacto.php?id=<?php echo $result[0]; ?>"><i class="fas fa-trash"></i> Eliminar</a></td>
                    <td><a href="./editContacto.php?id=<?php echo $result[0]; ?>"><i class="fas fa-edit"></i> Editar</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>