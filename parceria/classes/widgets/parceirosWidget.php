<?php

class parceirosWidget extends \classes\Component\widget{
    
    protected $modelname = "institucional/parceria";
    protected $method    = "listParceiros";
    protected $title     = 'Parceiros';
    
     public function init() {
        parent::init();
        $this->cachename = "institucional/parceria/parceiros";
    }
    
     protected function listMethod($itens){
        $listMethod = $this->method;
        foreach($itens as $name => $item){
                if(empty($item)) continue;
                $this->component->$listMethod($this->modelname, $item);
                $flush = ob_get_contents();
        }
    }
}