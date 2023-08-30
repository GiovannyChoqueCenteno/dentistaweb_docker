<?php

require_once BASE_PATH . "modelo/MTipo_servicio.php";

class VServicio{
    private $MServicio;
    private $MTipo_servicio;

    public function __construct(){
        $this->MServicio = new MServicio();
        $this->MTipo_servicio = new MTipo_servicio();
    }

    public function index(){
        $tipos = $this->indexTipos();
        $servicios = $this->MServicio->index();
        require_once BASE_PATH . "public/views/layout/nav.php";
        require_once BASE_PATH . "public/views/servicio/index.php";
    }

    public function indexTipos(){
        return $this->MTipo_servicio->index();
    }


}