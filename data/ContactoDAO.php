<?php

require_once('Conexion.php');
require_once('CRUD.php');
require_once('../model/Contacto.php');

class ContactoDAO implements CRUD {

    public function create($contacto) {
        $pdo = Conexion::getConexion();

        $stmt = $pdo->prepare("INSERT INTO Contacto(nombre, apellido, telefono) VALUES (:nombre, :apellido, :telefono)");

        $stmt->bindParam(':nombre', $contacto->getNombre());
        $stmt->bindParam(':apellido', $contacto->getApellido());
        $stmt->bindParam(':telefono', $contacto->getTelefono());

        $stmt->execute();
    }

    public function read($id) {
        $pdo = Conexion::getConexion();

        $stmt = $pdo->prepare("SELECT * FROM Contacto WHERE id = :id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $res = $stmt->fetch();

        $contacto = new Contacto();
        $contacto->setId($res[0]);
        $contacto->setNombre($res[1]);
        $contacto->setApellido($res[2]);
        $contacto->setTelefono($res[3]);

        return $contacto;
    }

    public function update($contacto) {
        $pdo = Conexion::getConexion();

        $stmt = $pdo->prepare("UPDATE Contacto SET nombre=:nombre, apellido=:apellido, telefono=:telefono WHERE id=:id");
        $stmt->bindParam(':id',$contacto->getId());
        $stmt->bindParam(':nombre',$contacto->getNombre());
        $stmt->bindParam(':apellido',$contacto->getApellido());
        $stmt->bindParam(':telefono',$contacto->getTelefono());

        $stmt->execute();
    }

    public function delete($id) {
        $pdo = Conexion::getConexion();


        $stmt = $pdo->prepare("DELETE FROM Contacto WHERE id=:id");
        $stmt->bindParam(':id', $id);

        $stmt->execute();
    }

    public function list() {
        $pdo = Conexion::getConexion();

        $stmt = $pdo->prepare("SELECT * FROM Contacto");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}