<?php

require_once  'model/categoriaModel.php';
require_once  'model/usuarioModel.php';
require_once  'view/categoriaView.php';

class categoriaController{

    private $model;
    private $view;
    private $modelUser;

    public function  __construct() {
        $this->model = new categoriaModel();
        $this->view = new categoriaView();
        $this->modelUser = new usuarioModel();
    }


   /********ADMIN******/
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

    function showCategoriasAdmin(){
        $logged= $this->getAccess();
        $categoria = $this->model->getCategories();
        $this->view->renderCategorias($categoria,$logged);
       
    }

    function agregarCategoria(){
        if (isset($_POST['input_categoria'])){
            $categoria = $_POST['input_categoria'];
        }    
        $this->model->insertarCategoria($categoria);
        $this->view->ShowHomeLocationCategoria();
    }


    function eliminarCategoria($params = null){
        $id = $params[':ID'];
        $this->model->eliminarCategoria($id);
        $this->view->ShowHomeLocationCategoria();
    }


    function formEdit($params){
        $id = $params[':ID'];
        $categoria= $this->model->getID($id);
        $logged= $this->getAccess();
        $this->view->showEdit($categoria,$logged);
    }

    function editarCategoria($params){
        $id = $params[':ID'];
        if(isset($_POST['input_edit_categoria']) != ""){
            $nombre = $_POST['input_edit_categoria'];
        $this->model->editarCategoria($nombre,$id);
        $this->view->ShowHomeLocationCategoria();
        }

    }

}