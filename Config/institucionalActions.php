<?php

use classes\Classes\Actions;
class institucionalActions extends Actions{
    
    protected $permissions = array(
        
        "INSTITUCIONAL" => array(
            "nome"      => "INSTITUCIONAL",
            "label"     => "Informações institucionais",
            "descricao" => "Permissão que o usuário veja as informações institucionais",
            'default'   => 's',
        ),
        
        "INSTITUCIONAL_ADMIN" => array(
            "nome"      => "INSTITUCIONAL_ADMIN",
            "label"     => "Gerenciar Informações institucionais",
            "descricao" => "Permissão que um usuário gerencie as informações institucionais do site",
            'default'   => 'n',
        ),
    
    );
    
    protected $actions = array( 
           
        "institucional/index/index" => array(
            "label" => "Sobre nós", "publico" => "s", 'default_yes' => 's','default_no' => 's',
            "permission" => "INSTITUCIONAL", 'needcod' => false,
            "menu" => array('institucional/index/formulario', 'institucional/index/all')
        ),
        
        "institucional/index/all" => array(
            "label" => "Todos os dados Institucionais", "publico" => "n", 'default_yes' => 's','default_no' => 'n',
            "permission" => "INSTITUCIONAL", 'needcod' => false,
            "menu" => array("institucional/index/index" , 'institucional/index/formulario')
        ),
        
        "institucional/index/formulario" => array(
            "label" => "Criar Sobre nós", "publico" => "n", 'default_yes' => 's','default_no' => 'n',
            "permission" => "INSTITUCIONAL_ADMIN", 'needcod' => false,
            "menu" => array('institucional/index/index')
        ),
        
        "institucional/index/edit" => array(
            "label" => "Editar Sobre nós", "publico" => "n", 'default_yes' => 's','default_no' => 'n',
            "permission" => "INSTITUCIONAL_ADMIN", 'needcod' => true,
            "menu" => array('institucional/index/show')
        ),
        
        "institucional/index/show" => array(
            "label" => "Exibir Sobre nós", "publico" => "n",'default_yes' => 's','default_no' => 'n',
            "permission" => "INSTITUCIONAL_ADMIN", 'needcod' => true,
            "menu" => array('institucional/index/index',
                'Opções' => array(
                    'institucional/index/edit', 'institucional/index/apagar'
                 )
             )
        ),
        
        "institucional/index/apagar" => array(
            "label" => "Apagar Sobre nós", "publico" => "n", 'default_yes' => 's','default_no' => 'n',
            "permission" => "INSTITUCIONAL_ADMIN", 'needcod' => true,
            "menu" => array()
        ),
        
        
        
        
        
        
        
        
         "institucional/parceria/index" => array(
            "label" => "Parceiros", "publico" => "s", 'default_yes' => 's','default_no' => 's',
            "permission" => "INSTITUCIONAL", 'needcod' => false,
            "menu" => array('institucional/parceria/formulario','institucional/parceria/editar'),
            'breadscrumb' => array('institucional/parceria/redirecionar', 'institucional/parceria/index')
        ),
        
         "institucional/parceria/redirecionar" => array(
            "label" => "Página Inicial", "publico" => "s", 'default_yes' => 's','default_no' => 's',
            "permission" => "INSTITUCIONAL", 'needcod' => false,
            "menu" => array(''),
        ),
        
        
        "institucional/parceria/formulario" => array(
            "label" => "Criar Parceria", "publico" => "n", 'default_yes' => 's','default_no' => 'n',
            "permission" => "INSTITUCIONAL_ADMIN", 'needcod' => false,
            "menu" => array('institucional/parceria/index')
        ),
        
        "institucional/parceria/edit" => array(
            "label" => "Editar Parceria", "publico" => "n", 'default_yes' => 's','default_no' => 'n',
            "permission" => "INSTITUCIONAL_ADMIN", 'needcod' => true,
            "menu" => array('institucional/parceria/show')
        ),
        
        "institucional/parceria/show" => array(
            "label" => "Exibir Parceria", "publico" => "n",'default_yes' => 's','default_no' => 'n',
            "permission" => "INSTITUCIONAL_ADMIN", 'needcod' => true,
            "menu" => array('institucional/parceria/index',
                'Opções' => array(
                    'institucional/parceria/edit', 'institucional/parceria/apagar'
                 )
             )
        ),
        
        "institucional/parceria/apagar" => array(
            "label" => "Apagar Parceria", "publico" => "n", 'default_yes' => 's','default_no' => 'n',
            "permission" => "INSTITUCIONAL_ADMIN", 'needcod' => true,
            "menu" => array()
        ),
        
         "institucional/parceria/editar" => array(
            "label" => "Editar", "publico" => "n", 'default_yes' => 's','default_no' => 'n',
            "permission" => "INSTITUCIONAL_ADMIN", 'needcod' => true,
            "menu" => array('institucional/parceria/index')
        ),

    );
}

?>