<?php
//Requerimos los archivos para el enrutamiento
require_once __DIR__ . '/config/index.php';
require_once __DIR__ . '/router/index.php';

$router = new Router();

$router->get('/c022021/', 'index.php');

$router->getViews('/c022021/views/login/', 'login/index.php');

$router->getViews('/c022021/views/registrar/', 'registrar/index.php');

?>

