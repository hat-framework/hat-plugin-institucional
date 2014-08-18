<?php 
 use classes\Controller\CController;
class sobreController extends CController{
    public $model_name = 'institucional/sobre';
    
     public function index(){
        $this->registerVar("institucional", $this->model->selecionar());
        $this->display("institucional/sobre/sobre");
    }
    
    public function all(){
        parent::index();
    }
}