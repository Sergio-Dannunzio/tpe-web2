<?php
require_once 'routerClass.php';
require_once 'api/ApiComentarioController.php';

// instacio el router
$router = new Router();

// armo la tabla de ruteo de la API REST
$router->addRoute('comentario/:ID', 'GET', 'ApiComentarioController', 'getComentariosByFood');
$router->addRoute('borrarComentario/:ID', 'DELETE', 'ApiComentarioController', 'deleteComentarios');
$router->addRoute('comentario', 'POST', 'ApiComentarioController', 'insertComentario');


//$router->addRoute('tareas/:ID', 'PUT', 'ApiTasksController', 'UpdateTask');


 //run
 $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
