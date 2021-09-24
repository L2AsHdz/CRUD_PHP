<?php

include_once('../model/Contacto.php');
include_once('../data/ContactoDAO.php');

try {

    $contactoDAO = new ContactoDAO();

    $contactoDAO->delete($_GET["id"]);
    header("location: ../view/listContactos.php");
}catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}