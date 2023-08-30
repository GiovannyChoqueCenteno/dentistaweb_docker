<?php

class VProducto{
    private $MProducto;

    public function __construct(){
        $this->MProducto = new MProducto();
    }

    public function index(){
        $productos = $this->MProducto->index();
        require_once BASE_PATH . "public/views/layout/nav.php";
        require_once BASE_PATH . "public/views/producto/index.php";
    }

}