<?php
require_once "./libs/smarty/Smarty.class.php";
class productosView{
  
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }



    /******** USUARIO ********/

    function renderFoods($producto, $categoria){
        $this->smarty->assign('titulo', "Comidas :D");
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('templates/productos.tpl');
        }
  

    function renderByCategories($categoria){
        $this->smarty->assign('titulo', "Categoria: ");
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('templates/productosByCategories.tpl');
    }


    function ShowHomeLocation(){
        header("Location: " . BASE_URL . "home");
    }

    function renderError(){
        $this->smarty->assign('titulo', "!!!!!ERROR!!!!!");
        $this->smarty->display('templates/error.tpl');
    }





    /*********ADMIN*********/

    function ShowHomeAdmin(){
        header("Location: " . BASE_URL . "allProductosAdmin");
    }

    function renderAdmin($logged){
        $this->smarty->assign('titulo', "ADMINISTRADOR");
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('templates/administrador.tpl');
    }

    function renderProductosAdmin($producto,$categoria,$logged){
        $this->smarty->assign('titulo', "Productos");
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('templates/productosAdmin.tpl');
    }

    function renderDetalleProducto($producto){
        $this->smarty->assign('titulo', "Producto:");
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('templates/productoDetalle.tpl');
    }

    function showEditProductos($producto,$categoria,$logged){
        $this->smarty->assign('titulo', "editar producto");
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display("templates/editProducto.tpl");
    }
  }


?>