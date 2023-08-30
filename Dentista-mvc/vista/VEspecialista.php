<?php
require_once BASE_PATH . "modelo/MCargo.php";

class VEspecialista{
    private $MEspecialista;
    private $MCargo;

    public function __construct(){
        $this->MEspecialista = new MEspecialista();
        $this->MCargo = new MCargo();
    }

    public function index(){
        $cargos = $this->indexCargos();
        $especialistas = $this->MEspecialista->Index();
        require_once BASE_PATH . "public/views/layout/nav.php";
        require_once BASE_PATH . "public/views/especialista/index.php";
    }

    public function indexCargos(){
        return $this->MCargo->index();
    }

}