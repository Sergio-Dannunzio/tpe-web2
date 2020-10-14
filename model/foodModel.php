
<?php


class foodModel{

    private $db;
  

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db;charset=utf8', 'root', '');  
    }

    //trae producto
    function getFoods(){
        $query = $this->db->prepare('SELECT * FROM `producto` INNER JOIN categoria ON producto.id_categoria = categoria.id');
        $query->execute(); 
        $food = $query->fetchAll(PDO::FETCH_OBJ);
        return $food;
    } 

    //producto con id
    function getID($id_producto){
        $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_producto = ?");
        $sentencia->execute([$id_producto]);
        $producto= $sentencia->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    //trae detalle
    function showDetalleProducto($id_producto){
        $query = $this->db->prepare("SELECT * FROM producto WHERE producto.id_producto = $id_producto");
        $query->execute(); 
        $producto = $query->fetchAll(PDO::FETCH_OBJ);
        return  $producto;
    }
    
    //agregar
    function InsertFood($nombre,$descripcion,$precio,$id_categoria){
        $sentencia = $this->db->prepare("INSERT INTO producto(nombre, descripcion, precio, id_categoria) VALUES(?,?,?,?)");
        $sentencia->execute(array($nombre,$descripcion,$precio,$id_categoria));
    }

    //eliminar
    function borrarProducto($id_producto){
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto=?");
        $sentencia->execute(array($id_producto));
    }

    //editar
    function updateProducto( $id_producto, $nombre,$descripcion,$precio,$id_categoria){
        $sentencia = $this->db->prepare("UPDATE producto SET nombre=?, descripcion=?, precio=?, id_categoria=? WHERE producto.id_producto=?");
        return $sentencia->execute(array($nombre,$descripcion,$precio,$id_categoria, $id_producto ));
    }

}    