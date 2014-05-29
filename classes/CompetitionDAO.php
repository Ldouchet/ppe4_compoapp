<?php
	require_once('MysqlDAO.php');
	require_once('Competition.php');

	class CompetitionDAO extends MysqlDAO {
		
		public function __construct(){
			parent::__construct();
		}

		public function create($c) {
			$nom = $c->getNom();

        $sql = "CALL `ajout_competition`('".$nom."');";
		echo ($sql);
        $requete_create=$this->connexion->query($sql) or die ("marche pas ");
		}

		public function update($t) {

		}

		public function delete($_id) {

		}

		public function findAll() {
			$sql = "select * from competition order by id asc";
			$requete_findAll=$this->connexion->query($sql);
			$liste=array();
			while ($ligne=$requete_findAll->fetch(PDO::FETCH_OBJ)){
				$c = new Competition();
				$c->setId($ligne->id);
				$c->setNom($ligne->nom);

				$liste[]=$c;
			}
			return $liste;
		}

		public function findById($_id) {

		}

	}
?>