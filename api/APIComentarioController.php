<?php
require_once './model/comentarioModel.php';
require_once 'APIcontroller.php';

class ApiComentarioController extends ApiController {  

  
    function __construct() {
        parent::__construct();
        $this->model = new comentarioModel();
    }

    public function getComentariosByFood($params = null) {
        $id_producto = $params[':ID'];
        $comentario = $this->model->getComentariosByFood($id_producto);
        $this->view->response($comentario, 200);
    }
    
    public function insertComentario($params = null){
        $body = $this->getData();
        $comentario = $body->comentario;
        $puntaje = $body->puntaje;
        $id_producto = $body->id_producto;
        
        $id_comentario = $this->model->insertarComentario($comentario, $puntaje, $id_producto);
        
        if (!empty($id_comentario)){
            $this->view->response( "El comentario se inserto correctamente", 201);
        }
        else{
            $this->view->response("El comentario no se ha podido insertar", 404);
        }
    }
    
    
    public function deleteComentarios($params = null) {
        $id_comentario = $params[':ID'];
        $result = $this->model->eliminarComentario($id_comentario);
        
        if($result > 0){
            $this->view->response("El comentario fue eliminado", 200);
        }   
        else{
            $this->view->response("El comentario no existe", 404);
        }
        
    }

}