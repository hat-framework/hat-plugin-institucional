<?php
class institucionalInstall extends classes\Classes\InstallPlugin{
    
    protected $dados = array(
        'pluglabel' => 'Institucional',
        'isdefault' => 'n',
        'detalhes'  => 'Informações institucionais',
    );
    
    public function install(){
        return true;
    }
    
    public function unstall(){
        return true;
    }
}