<?php 
 use classes\Controller\CController;
class produtoController extends CController{
    public $model_name = 'institucional/produto';
    
    
    public function GI(){
        $this->display('institucional/produto/gi');
    }
    
}