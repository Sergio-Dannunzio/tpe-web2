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


    function showRegistrarse(){
        $this->smarty->assign('titulo', "Registrarse ");
        $this->smarty->display('templates/formRegistrarse.tpl');
    }

    
    function ShowHomeLocation(){
        header("Location: " . BASE_URL . "home");
    }


    
}