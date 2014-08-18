<?php 
class institucional_contatoData extends \classes\Model\DataModel{
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
	    'size'     => '50',
	    'grid'    => true,
	    'display' => true,
        ),
         'dsemail' => array(
	    'name'     => 'Dsemail',
	    'type'     => 'varchar',
	    'size'     => '100',
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Contato'),);
}
?>