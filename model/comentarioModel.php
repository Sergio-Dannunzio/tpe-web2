<?php


class comentarioModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db;charset=utf8', 'root', '');
    }


    function getComentarios(){
        $sentencia = $this->db->prepare("SELECT * FROM comentario ");
        $sentencia->execute();
        $comentario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentario;
    }
   
    function getComentariosByFood($id_producto){
        $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_producto = ?");
        $sentencia->execute(array($id_producto));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function insertarComentario($comentario,$puntaje,$id_producto){
        $query = $this->db->prepare("INSERT INTO comentario(comentario,puntaje,id_producto) VALUES(?,?,?)");
        $query->execute(array($comentario,$puntaje,$id_producto));
    }

    function eliminarComentario($id_comentario){
        $query = $this->db->prepare('DELETE FROM comentario WHERE id_comentario = ?');
        $query->execute([$id_comentario]);
    }


}