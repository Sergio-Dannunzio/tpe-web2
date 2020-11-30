<?php

include_once 'model/usuarioModel.php';
include_once 'view/usuarioView.php';

class usuarioController{

    private $model;
    private $view;

    function __construct(){
        $this->view = new usuarioView();
        $this->model = new usuarioModel();
    }




    function login(){
        $this->view->showLogin();
    }

    function registrarse(){
        $this->view->showRegistrarse();
    }


    function iniciarSesion(){
        $usuario = $_POST['input_nombre'];
        $password = $_POST['input_password'];
        $access = 2;

        $hash = password_hash($password, PASSWORD_DEFAULT);

        if(isset($usuario) && $usuario!="" &&
            isset($access) && $access!="" &&
            isset($password) && $password!=""){
            $this->model->agregarUsuario($usuario, $hash, $access);
            $usuarioDB = $this->model->getUser($usuario);
                    session_start();
                        $_SESSION['id_usuario'] = $usuarioDB->id_usuario;
                        $_SESSION["input_nombre"] = $usuarioDB->usuario;
                        $_SESSION["input_access"] = $usuarioDB->access;
                    header("Location: ".BASE_URL."administrador");
                }else{
                    $this->view->showRegistrarse("Campos vacios");
                }
        
    }

    function cerrarSesion(){
        session_start();
        session_destroy();
        header("Location: ". LOGIN);
    }

function verificar(){
        $usuario = $_POST['input_nombre'];
        $password = $_POST['input_password'];

        if(isset($usuario)){
            $usuarioDB = $this->model->getUser($usuario);

            if(isset($usuarioDB) && $usuarioDB){
                
                if (password_verify($password, $usuarioDB->password)){
                    session_start();
                        $_SESSION['id_usuario'] = $usuarioDB->id_usuario;
                        $_SESSION["input_nombre"] = $usuarioDB->usuario;
                    header("Location: ".BASE_URL."administrador");
                }else{
                    $this->view->showLogin("Contraseña incorrecta");
                }
            }else{
                $this->view->showLogin("El usuario no existe");
            }
        }
    }

    function getAccess(){
        session_start();
        if(isset($_SESSION['id_usuario'])){
            $logged = $this->model->getUserLogged($_SESSION['id_usuario']);
            return $logged->access;
        }else{
            return 0;
        }
    }

    function showAdmin(){
        $logged= $this->getAccess();
        $this->view->renderAdmin($logged);
    }

    function showUsuariosAdmin(){
        $usuarios = $this->model->getUsuarios();
        $logged= $this->getAccess();
        $this->view->renderUsuariosAdmin($usuarios,$logged);
    }

    function eliminarUsuario($params = null){
        $id_usuario = $params[':ID'];
        $this->model->borrarUsuario($id_usuario);
        $this->view->ShowHomeLocation();
    }

    function quitarPermisosUsuario($params = null){
        $id = $params[':ID'];
        $this->model->quitarPermisosUsuario($id); 
        $this->view->ShowHomeLocation();
    }
    function asignarPermisosUsuario($params = null){
        $id = $params[':ID'];
        $this->model->asignarPermisosUsuario($id); 
        $this->view->ShowHomeLocation();
    }




}
