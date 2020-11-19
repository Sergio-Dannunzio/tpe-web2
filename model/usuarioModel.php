<?php


class usuarioModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db;charset=utf8', 'root', '');
    }

    function agregarUsuario($nombre, $password, $access){
        $sentencia = $this->db->prepare("INSERT INTO usuario( nombre, password, access) VALUES (?, ?, ?)");
        $sentencia->execute(array($nombre, $password, $access));
    }

    function getUser($usuario){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE nombre=?");
        $sentencia->execute(array($usuario));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getUsuarios(){
        $sentencia = $this->db->prepare("SELECT * FROM usuario ");
        $sentencia->execute();
        $usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $usuario;
    }

    function getUserLogged($id){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE id_usuario = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  function borrarUsuario($id_usuario){
    $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
    $sentencia->execute(array($id_usuario));
    }

    function asignarPermisosUsuario($id){
        $query = $this->db->prepare("UPDATE usuario SET access=1 WHERE id_usuario=?");
        $query->execute(array($id));
    }
    function quitarPermisosUsuario($id){
        $query = $this->db->prepare("UPDATE usuario SET access=2 WHERE id_usuario=?");
        $query->execute(array($id));
    }


}

?>