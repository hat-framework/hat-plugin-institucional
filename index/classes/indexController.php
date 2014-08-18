<?php
 use classes\Controller\CController;
class indexController extends CController{
    
    public $model_name     = "institucional/index";
    public function index(){
        $this->registerVar("institucional", $this->model->selecionar());
        $this->display("institucional/index/index");
    }
    
    public function all(){
        parent::index();
    }
    
}

?>
