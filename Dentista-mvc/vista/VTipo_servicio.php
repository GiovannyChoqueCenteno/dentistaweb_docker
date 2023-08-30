<?php

class VTipo_servicio{
    private $MTipo_servicio;

    public function __construct(){
        $this->MTipo_servicio = new MTipo_servicio();
    }

    public function index(){
        $tipos = $this->MTipo_servicio->index();
        require_once BASE_PATH . "public/views/layout/nav.php";
        require_once BASE_PATH . "public/views/tipo_servicio/index.php";
    }

}