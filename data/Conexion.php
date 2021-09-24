<?php

class Conexion {

    public static function getConexion() {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=AgendaDB', 'userDB', '123');
            return $conn;
        } catch (PDOException $pe) {
            echo "No se pudo conectar: " . $pe->getMessage();
        }
    }
}