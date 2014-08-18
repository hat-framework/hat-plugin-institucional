<?php

class institucionalLoader extends classes\Classes\PluginLoader{
    
    public function setCommonVars(){
        //$this->setVar("menu_title", 'Empresa');
        $this->setVar("menu", array('institucional' => array('institucional' => "Institucional")));
    }
    
    public function setAdminVars(){

    }
    
}

?>