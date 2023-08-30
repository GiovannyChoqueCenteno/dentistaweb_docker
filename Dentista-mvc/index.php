<?php
define("BASE_PATH", '/var/www/html/');

require_once BASE_PATH . "autoload.php";
define("ROOT", "http://localhost/");
require_once BASE_PATH . "config/db.php";
require_once BASE_PATH . "public/views/layout/header.php";

if (isset($_GET['controller']) && class_exists(ucfirst($_GET['controller']) . 'Controller')) {
    $controller_name = ucfirst($_GET['controller']) . 'Controller';
    $controller = new $controller_name();
    if (($_GET['action'] == "")) {
        $controller->index();
    } else {
        if (method_exists($controller, $_GET['action'])) {
            $action = $_GET['action'];
            $controller->$action();
        } else
            echo "<h2>404 Error, la pagina no existe</h2>";
    }
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $index = new InicioController();
    $index->index();
} else
    echo "<h2>404 Error, la pagina no existe</h2>";

require_once BASE_PATH . "public/views/layout/footer.php";
