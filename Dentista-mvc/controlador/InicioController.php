<?php
require_once BASE_PATH . "vista/VInicio.php";

class InicioController{
    private $VInicio;

    public function __construct(){
        $this->VInicio = new VInicio();
    }

    public function index(){
        $this->VInicio->index();
    }
}