<?php

interface CRUD {

    public function create($contacto);
    public function read($id);
    public function update($contacto);
    public function delete($id);
    public function list();
}