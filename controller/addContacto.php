<?php

include_once('../model/Contacto.php');
include_once('../data/ContactoDAO.php');

try {

    $contactoDAO = new ContactoDAO();

    $contacto = new Contacto();
    $contacto->setNombre($_POST["nombre"]);
    $contacto->setApellido($_POST["apellido"]);
    $contacto->setTelefono($_POST["tel"]);

    $contactoDAO->create($contacto);
    header("location: ../view/listContactos.php");
}catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}