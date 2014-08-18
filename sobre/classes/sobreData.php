<?php 
class institucional_sobreData extends \classes\Model\DataModel{
    public $dados  = array(
         'cod' => array(
	    'name'     => 'Código',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'ai'      => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'private' => true
        ),
         'dsnome' => array(
	    'name'     => 'Dsnome',
	    'type'     => 'varchar',
	    'size'     => '127',
	    'grid'    => true,
	    'display' => true,
        ),
         'dsconteudo' => array(
	    'name'     => 'Dsconteudo',
	    'type'     => 'mediumtext',
	    'grid'    => true,
	    'display' => true,
        ),
         'ordem' => array(
	    'name'     => 'Ordem',
	    'type'     => 'int',
	    'size'     => '5',
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Sobre'),);
}
?>