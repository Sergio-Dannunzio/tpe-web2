<?php


class comentarioModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db;charset=utf8', 'root', '');
    }

    function getComentarios(){
        $sentencia = $this->db->prepare("SELECT * FROM comentario");
        $sentencia->execute();
        $comentario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentario;
    }

    function getComentario($id_comentario){
        $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id_comentario));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function insertarComentario($comentario,$puntaje){
        $query = $this->db->prepare("INSERT INTO comentario(comentario,puntaje) VALUES(?,?)");
        $query->execute(array($comentario,$puntaje));
    }

    function eliminarComentario($id_comentario){
        $query = $this->db->prepare('DELETE FROM comentario WHERE id_comentario = ?');
        $query->execute([$id_comentario]);
    }


}