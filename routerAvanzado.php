<?php

require_once 'controller/categoriaController.php';
require_once 'controller/foodController.php';
require_once 'controller/usuarioController.php';
require_once 'routerClass.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');


$r = new Router();


//Productos admin
$r->addRoute("administrador", "GET", "foodController", "showAdmin");
$r->addRoute("allProductosAdmin", "GET", "foodController", "showProductosAdmin");

$r->addRoute("agregarProducto", "POST", "foodController", "agregarProducto" );

$r->addRoute("borrar/:ID", "GET", "foodController", "eliminarProducto");

$r->addRoute("editarProducto/:ID", "GET", "foodController", "formEditProducto");
$r->addRoute("editarProducto/:ID", "POST", "foodController", "editarProducto");



//Categoria admin
$r->addRoute("allCategoriaAdmin", "GET", "categoriaController", "showCategoriasAdmin");

$r->addRoute("agregarCategoria", "POST", "categoriaController", "agregarCategoria" );

$r->addRoute("eliminarCategoria/:ID", "GET", "categoriaController", "eliminarCategoria");

$r->addRoute("editarCategoria/:ID", "GET", "categoriaController", "formEdit");
$r->addRoute("editarCategoria/:ID", "POST", "categoriaController", "editarCategoria");


//Usuario
$r->addRoute("allUsuariosAdmin", "GET", "usuarioController", "showUsuariosAdmin");

$r->addRoute("eliminarUsuario/:ID", "GET", "usuarioController", "eliminarUsuario");

$r->addRoute("asignarUsuario/:ID", "GET", "usuarioController", "asignarPermisosUsuario");
$r->addRoute("quitarUsuario/:ID", "GET", "usuarioController", "quitarPermisosUsuario");

//registrarse-login-logout
$r->addRoute("registrarse", "GET", "usuarioController", "registrarse");
$r->addRoute("registrarse", "POST", "usuarioController", "iniciarSesion");

$r->addRoute("login", "GET", "usuarioController", "login");

$r->addRoute("logout", "GET", "usuarioController", "cerrarSesion");

$r->addRoute("verificar", "POST", "usuarioController", "verificar");
$r->addRoute("verificarRegistrarse", "POST", "usuarioController", "verificarRegistrarse");

// rutas
$r->addRoute("home", "GET", "foodController", "showAll");
$r->addRoute("todas", "GET", "foodController", "showAll");


$r->addRoute("producto/:ID", "GET", "foodController", "showDetalle");

$r->addRoute("categoria/:ID", "GET","foodController", "showByCategories" );


//Ruta por defecto.
$r->setDefaultRoute("foodController", "showAll");

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

