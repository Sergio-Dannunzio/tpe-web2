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

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->model->agregarUsuario($usuario, $hash);
        $this->view->showHomeLocation();
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
                // Existe el usuario
                if (password_verify($password, $usuarioDB->password)){
                    session_start();
                        $_SESSION['id_usuario'] = $usuarioDB->id_usuario;
                        $_SESSION["input_nombre"] = $usuarioDB->usuario;
                        $_SESSION['LAST_ACTIVITY'] = time();

                    header("Location: ".BASE_URL."administrador");
                }else{
                    $this->view->showLogin("Contraseña incorrecta");
                }

            }else{
                // No existe el user en la DB
                $this->view->showLogin("El usuario no existe");
            }
        }
    }

}

