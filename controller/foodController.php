<?php

require_once  'model/foodModel.php';
require_once  'model/categoriaModel.php';
require_once  'model/usuarioModel.php';
require_once  'view/productosView.php';

class foodController{

    private $model;
    private $view;
    private $modelCategoria;
    private $modelUser;

    public function  __construct() {
        $this->model = new foodModel();
        $this->view = new productosView();
        $this->modelCategoria = new  categoriaModel();
        $this->modelUser = new usuarioModel();
    }

    
    /******** USUARIO **********/

    function showAll(){
        $producto = $this->model->getFoods();
        $categoria = $this->modelCategoria->getCategories();
        $producto = $this->view->renderFoods($producto, $categoria);
    }


    function showByCategories($params = null){
        $id = $params[':ID'];
        $categoria = $this->modelCategoria->getProductosByCategoria($id);
        $this->view->renderByCategories($categoria);
    }


    function showDetalle($params = null){
        $id_producto = $params[':ID'];
        $logged= $this->getAccess();
        $producto= $this->model->showDetalleProducto($id_producto);
        $usuario = $this->modelUser->getUsuarios();
        $this->view->renderDetalleProducto($producto, $logged, $usuario); 
    }




    /******** ADMIN **********/

    function getAccess(){
        session_start();
        if(isset($_SESSION['id_usuario'])){
            $logged = $this->modelUser->getUserLogged($_SESSION['id_usuario']);
            return $logged->access;
        }else{
            return 0;
        }
    }

    function showAdmin(){
        $logged= $this->getAccess();
        $this->view->renderAdmin($logged);
    }

    function showProductosAdmin(){
        $producto = $this->model->getFoods();
        $categoria = $this->modelCategoria->getCategories();
        $logged= $this->getAccess();
        $this->view->renderProductosAdmin($producto,$categoria,$logged);
    }


    function agregarProducto(){
        if (isset($_POST['input_nombre']) && isset($_POST['input_descripcion'])&& 
        isset($_POST['input_precio']) && isset($_POST['select_categoria'])){
        $nombre = $_POST['input_nombre'];
        $descripcion = $_POST['input_descripcion'];
        $precio = $_POST['input_precio'];
        $categoria = $_POST['select_categoria'];
        }

    $this->model->InsertFood($nombre,$descripcion,$precio,$categoria);
    $this->view->ShowHomeAdmin();
    }

    function eliminarProducto($params = null){
        $id_producto = $params[':ID'];
        $this->model->borrarProducto($id_producto);
        $this->view->ShowHomeAdmin();
    }


    function formEditProducto($params){
        $id_producto = $params[':ID'];
        $producto= $this->model->getID($id_producto);
        $categoria = $this->modelCategoria->getCategories();
        $logged= $this->getAccess();
        $this->view->showEditProductos($producto,$categoria,$logged);
    }

    function editarProducto($params){
        $id_producto = $params[':ID'];

        $nombre= $_POST['input_edit_nombre'];
        $descripcion = $_POST['input_edit_descripcion'];
        $precio = $_POST['input_edit_precio'];
        $id_categoria= $_POST['categoriaUpdate'];
        
        $this->model->updateProducto( $id_producto,$nombre,$descripcion,$precio,$id_categoria);
        $this->view->ShowHomeAdmin();
    }

}