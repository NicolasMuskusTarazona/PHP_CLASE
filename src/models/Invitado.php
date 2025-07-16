<?php
// clase6.php

include_once('Person.php');

class Invitado extends Person{
    private string $nombreInvito;
    private string $nombreAutorizo;

    public function __construct(
        int $id,
        string $nombre,
        int $edad,
        string $documento,
        string $tipo,
        string $nombreInvito,
        string $nombreAutorizo
    ){
        parent::__construct($id,$nombre,$edad,$documento,$tipo);
        $this->nombreInvito = $nombreInvito;
        $this->nombreAutorizo = $nombreAutorizo;
    }

    public function esMayor() : bool {
        return $this->esMayor();
    }

    public function getNombreAutorizo() : string {
        return $this->nombreAutorizo;
    }

    public function getNombreInvito() : string {
        return $this->nombreInvito;
    }
}