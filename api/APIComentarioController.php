<?php
require_once './model/comentarioModel.php';
require_once 'ApiController.php';

class ApiComentarioController extends ApiController {  

  
    function __construct() {
        parent::__construct();
        $this->model = new comentarioModel();
        $this->view = new APIView();
    }

    public function getComentarios($params = null) {
        $comentario = $this->model->getComentarios();
        $this->view->response($comentario, 200);
    }

    public function deleteComentarios($params = null) {
        $id_comentario = $params[':ID'];
        $result =$comentario = $this->model->eliminarComentario($id_comentario);

        if($result > 0){
            $this->view->response("El comentario con el id=$id_comentario fue eliminado", 200);
        }   
        else{
            $this->view->response("El comentario con el id=$id_comentario no existe", 404);
        }
            
    }

    public function insertComentario($params = null){
        $body = $this->getData();

        $id_comentario = $this->model->insertarComentario($body->comentario,$body->puntaje);

        if (!empty($id_comentario)){
            $this->view->response( $this->model->getComentario($id_comentario), 201);
        }
        else{
            $this->view->response("El comentario no se pudo insertar", 404);
        }
    }
}