<?php 

class Main extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('main/index');
    }

    public function home(){
        echo 'FUNCION A CASA ';
    }
}

?>