<?php 
class institucional_parceriaData extends \classes\Model\DataModel{
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
	    'name'     => 'Nome',
	    'type'     => 'varchar',
	    'size'     => '127',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'dsimagem' => array(
	    'name'     => 'Imagem',
	    'type'     => 'varchar',
	    'size'     => '100',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'dslink' => array(
	    'name'     => 'Site',
	    'type'     => 'varchar',
	    'size'     => '200',
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Parceria'),);
}
?>