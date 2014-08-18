<?php 
 use classes\Controller\CController;
class parceriaController extends CController{
    public $model_name = 'institucional/parceria';
    
    public function index() {
         $this->display('institucional/parceria/index');
    }
    
    public function editar() {
        $this->display('institucional/parceria/edit');
    }
    
    public function redirecionar() {
        Redirect('empresa/index/index');
    }
    
    
}