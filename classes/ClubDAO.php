<?php
require_once('/classes/MysqlDAO.php');
require_once('/classes/Club.php');
require_once('/classes/Match.php');

class ClubDAO extends MysqlDAO {
	
public function __construct(){
	parent::__construct();
}
    //////////////// CONNEXION ///////////////////
public function testLogAdmin($login, $mdp)
{
    $req = "SELECT COUNT(*) FROM  `utilisateurs` WHERE  `login` =  '".$login."'AND  `mdp` =  '".$mdp."'";
    echo($req);
    $requete_findAll=$this->connexion->query($req);
    $resu = $requete_findAll->fetch();
    return $resu;
}
    //////////////////////////////////////////////


public function create($_o) {

}

public function update($t) {

}

public function delete($_id) {

}

public function findAll() {
    $sql = "select * from club order by numClub asc";
	$requete_findAll=$this->connexion->query($sql);
	$liste=array();
	while ($ligne=$requete_findAll->fetch(PDO::FETCH_OBJ)){
		$c = new Club();
        $c->setId($ligne->numClub);
        $c->setNom($ligne->nomClub);

		$liste[]=$c;
	}
	return $liste;
}

public function findById($_id) {

}

}
?>