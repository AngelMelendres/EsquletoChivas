<?php
class Usuario extends Controller{
    function __construct(){
        parent::__construct();
    }


    //a vistas
    public function index(){
        //$usuarios=
        $this->view->render('usuario/index');
    }

    public function crear(){
        $this->view->render('usuario/crear');
    }

    public function editar(){
        $this->view->render('usuario/crear');
    }

    public function ver(){
        $this->view->render('usuario/crear');
    }
    public function buscar(){
        $this->view->render('usuario/crear');
    }

    //al modelo
    public function guardar(){
        $this->view->render('usuario/crear');
    }
    public function actualizar(){
        $this->view->render('usuario/crear');
    }
    public function eliminar(){
        $this->view->render('usuario/crear');
    }

}
?>