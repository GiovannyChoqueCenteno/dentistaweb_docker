<?php

class VPaciente{
    private $MPaciente;

    public function __construct(){
        $this->MPaciente = new MPaciente();
    }

    public function index(){
        $pacientes = $this->MPaciente->Index();
        require_once BASE_PATH . "public/views/layout/nav.php";
        require_once BASE_PATH . "public/views/paciente/index.php";
    }


}