<?php
require_once('IDAO.php');

abstract class MysqlDAO implements IDAO {
	
	private static $PARAM_hote='mysql:host=localhost';
    private static $PARAM_nom_bd='dbname=match_fff';
    private static $PARAM_utilisateur='root' ;    		
    private static $PARAM_mot_passe='' ;	
	protected $connexion;
	
	function __construct() {	
		try
		{
			$this->connexion = new PDO(MysqlDAO::$PARAM_hote.';'.MysqlDAO::$PARAM_nom_bd, MysqlDAO::$PARAM_utilisateur, MysqlDAO::$PARAM_mot_passe);
            $this->connexion->query("SEOT CHARACTER SET utf8");
		}
		catch(Exception $e)
		{
			echo 'Erreur : '.$e->getMessage().'<br />';
			echo 'Numero : '.$e->getCode();
		}
	}


	public function create($o){}

	public function update($o){}

	public function delete($id){}

	public function findAll(){}
	
	public function getmatchs(){}
	
	public function findById($_id){}
	
}
?>