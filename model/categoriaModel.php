<?php

class categoriaModel{

    private $db;
  
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db;charset=utf8', 'root', '');
    }


    //producto por categoria
    function getProductosByCategoria($id){ 
        $query = $this->db->prepare("SELECT * FROM  producto, categoria WHERE producto.id_categoria = $id AND categoria.id = $id");
        $query->execute();
        $categoria = $query->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }
   
    //trae categorias
    function getCategories(){
        $query = $this->db->prepare('SELECT * FROM `categoria` ');
        $query->execute(); 
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function getID($id){
        // Construllo una sentencia
        $sentencia = $this->db->prepare("SELECT * FROM categoria WHERE id = ?");
        // ejecuto la sentencia
        $sentencia->execute([$id]);
        $categoria= $sentencia->fetch(PDO::FETCH_OBJ);
        return $categoria;
    }



    //agregar
    function insertarCategoria($categoria){
        $query = $this->db->prepare("INSERT INTO categoria(categoria) VALUES(?)");
        $query->execute(array($categoria));
    }

    //eliminar
    function eliminarCategoria($id){
        $query = $this->db->prepare('DELETE FROM `categoria` WHERE id = ?');
        $query->execute([$id]);
    }

    //editar
    function editarCategoria($categoria,$id){
        $query = $this->db->prepare("UPDATE categoria SET categoria=? WHERE id=?");
        return $query->execute(array($categoria,$id));
        
    }
}