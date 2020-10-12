<?php

class categoriaView{

        private $smarty;
    
 
        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', BASE_URL);
          
        }



     /******  ADMIN  ******/  

     function ShowHomeLocationCategoria(){
        header("Location: " . BASE_URL . "allCategoriaAdmin");
      
    }

    function renderAdmin($logged){
        $this->smarty->assign('titulo', "ADMINISTRADOR");
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('templates/administrador.tpl');
    }
    

        function renderCategorias($categoria,$logged){
            $this->smarty->assign('titulo', "Tabla de categorias");
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->assign('logged', $logged);
            $this->smarty->display('templates/categoriaAdmin.tpl');
        }

        function showEdit($categoria,$logged){
            $this->smarty->assign('titulo', "Editar categoria:");
            $this->smarty->assign('logged', $logged);
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->display("templates/editCategoria.tpl");
        }



}