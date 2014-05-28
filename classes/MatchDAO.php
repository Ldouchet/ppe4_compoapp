<?php
require_once('/classes/MysqlDAO.php');
require_once('/classes/Match.php');

class MatchDAO extends MysqlDAO {

    public function __construct(){
        parent::__construct();
    }

    public function create($m) {
        $date = $m->getDateMatch();
        $epreuve = $m->getEpreuveMatch();
        $club1 = $m->getClub1();
        $club2 = $m->getClub2();
        $sql = "INSERT INTO `match_fff`.`matchs` (`numMatch`, `dateMatch`, `epreuve`, `club1`, `club2`) VALUES (NULL,'".$date."','".$epreuve."','".$club1."','".$club2."');";
        $requete_create=$this->connexion->query($sql) or die ("marche pas ");

    }

    public function update($t) {

    }

    public function delete($_id) {

    }

    public function findAll() {
        $sql = "select * from Matchs order by numMatch asc";
        $requete_findAll=$this->connexion->query($sql);
        $liste=array();
        while ($ligne=$requete_findAll->fetch(PDO::FETCH_OBJ)){
            $m = new Match();
            $m->setNum($ligne->numMatch);
            $m->setDateMatch($ligne->dateMatch);
            $m->setEpreuveMatch($ligne->epreuve);
            $m->setClub1($ligne->club1);
            $m->setClub2($ligne->club2);

            $liste[]=$m;
        }
        return $liste;
    }
    public function getmatchs() {
    $sql1 = "select numMatch, c1.nomClub AS 'nom1', c2.nomClub AS 'nom2', nom, dateMatch, epreuve from matchs, club c1, club c2, competition where matchs.club1=c1.numClub and matchs.club2=c2.numClub and matchs.epreuve=competition.id ORDER BY numMatch DESC";
    $requete_getmatchs=$this->connexion->query($sql1);
    $liste1=array();
    while ($ligne1=$requete_getmatchs->fetch(PDO::FETCH_OBJ)){
        $c1 = new Match();
        $c1->setNum($ligne1->numMatch);
        $c1->setDateMatch($ligne1->dateMatch);
        $c1->setEpreuveMatch($ligne1->nom);
        $c1->setClub1($ligne1->nom1);
        $c1->setClub2($ligne1->nom2);

        $json = array(
            'num' => $c1->getNum(),
            'date'=> $c1->getDateMatch(),
            'epreuve'=> $c1->getEpreuveMatch(),
            'club1'=> $c1->getClub1(),
            'club2'=> $c1->getClub2(),
        );
        $liste1[]=$json;
    }



    return $liste1;

}
    public function getmatchsresclub() {
        $sql = "SELECT club.numclub FROM club, utilisateurs WHERE utilisateurs.id = club.gerant_club AND login ='".$_SESSION['nom']."';";

        $requete_num=$this->connexion->query($sql);
        $num = $requete_num->fetch();
        $num = $num[0];
        $sql2 = "SELECT numMatch, dateMatch, nom, c1.nomClub AS 'nom1', c2.nomClub AS 'nom2' FROM matchs, competition, club c1, club c2 WHERE matchs.club1=c1.numClub AND matchs.club2=c2.numClub and matchs.epreuve = competition.id AND (matchs.club1 = ".$num." AND matchs.club2 <>".$num." OR matchs.club1 <> ".$num." AND matchs.club2 =".$num.") ORDER BY dateMatch DESC";
        $requete_getmatchs=$this->connexion->query($sql2);
        $liste1=array();
        while ($ligne1=$requete_getmatchs->fetch(PDO::FETCH_OBJ)){
            $c2 = new Match();
            $c2->setNum($ligne1->numMatch);
            $c2->setDateMatch($ligne1->dateMatch);
            $c2->setEpreuveMatch($ligne1->nom);
            $c2->setClub1($ligne1->nom1);
            $c2->setClub2($ligne1->nom2);

            $jsonresclub = array(
                'num' => $c2->getNum(),
                'date'=> $c2->getDateMatch(),
                'epreuve'=> $c2->getEpreuveMatch(),
                'club1'=> $c2->getClub1(),
                'club2'=> $c2->getClub2(),
            );
            $liste1[]=$jsonresclub;
        }
        return $liste1;

    }
    public function getmatchsresclubmodifmatch() {
        $sql = "SELECT club.numclub FROM club, utilisateurs WHERE utilisateurs.id = club.gerant_club AND login ='".$_SESSION['nom']."';";

        $requete_num=$this->connexion->query($sql);
        $num = $requete_num->fetch();
        $num = $num[0];
        $sql2 = "SELECT numMatch, dateMatch, nom, c1.nomClub AS 'nom1', c2.nomClub AS 'nom2' FROM matchs, competition, club c1, club c2 WHERE matchs.club1=c1.numClub AND matchs.club2=c2.numClub and matchs.epreuve = competition.id AND (matchs.club1 = ".$num." AND matchs.club2 <>".$num." OR matchs.club1 <> ".$num." AND matchs.club2 =".$num.") ORDER BY dateMatch DESC";
        $requete_getmatchs=$this->connexion->query($sql2);
        $liste1=array();
        while ($ligne1=$requete_getmatchs->fetch(PDO::FETCH_OBJ)){
            $c2 = new Match();
            $c2->setNum($ligne1->numMatch);
            $c2->setDateMatch($ligne1->dateMatch);
            $c2->setEpreuveMatch($ligne1->nom);
            $c2->setClub1($ligne1->nom1);
            $c2->setClub2($ligne1->nom2);
            $liste1[]=$c2;
        }
        return $liste1;

    }
    public function findById($_id) {

    }

}
?>