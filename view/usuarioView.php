<?php

require_once "./libs/smarty/Smarty.class.php";

class usuarioView{

    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    function showLogin($message = ""){
        $this->smarty->assign('titulo', "Iniciar sesion");
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/formLogin.tpl');
    }


    function showRegistrarse($message = ""){
        $this->smarty->assign('titulo', "Registrarse ");
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/formRegistrarse.tpl');
    }

    function renderUsuariosAdmin($usuarios,$logged){
        $this->smarty->assign('titulo', "Todos los usuarios");
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display('templates/usuariosAdmin.tpl');
    }

    
    
    function ShowHomeLocation(){
        header("Location: " . BASE_URL . "allUsuariosAdmin");
    }



    
}