<?php
require_once('/classes/MysqlDAO.php');
require_once('/classes/Joueur.php');

class JoueurDAO extends MysqlDAO {

    public function __construct(){
        parent::__construct();
    }

    public function create($m) {
    }

    public function update($t) {

    }

    public function delete($id) {
        $sql1 = "DELETE FROM composition WHERE id_match=".$id."";
        $sqldelete=$this->connexion->query($sql1);

    }

    public function findAll() {
    }
    //////////////////////////////////////////////////
    // ENREGISTREMENT D'UNE CONFIGURATION DE MATCH////
    //////////////////////////////////////////////////

    public function rec_titulaire($id,$joueur) {
        $sql = "INSERT INTO  `match_fff`.`composition` (`id_match` ,`id_joueur` ,`statut`)VALUES ('".$id."',  '".$joueur."',  'titulaire')";
        $requete_rec_titulaire=$this->connexion->query($sql);
    }
    public function rec_remplacant($id,$joueur) {
        $sql = "INSERT INTO  `match_fff`.`composition` (`id_match` ,`id_joueur` ,`statut`)VALUES ('".$id."',  '".$joueur."',  'remplacant')";
        $requete_rec_remplacant=$this->connexion->query($sql);
    }

    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////


    public function getjoueursresclub() {
        $sql = "SELECT club.numclub FROM club, utilisateurs WHERE utilisateurs.id = club.gerant_club AND login ='".$_SESSION['nom']."';";

        $requete_num=$this->connexion->query($sql);
        $num = $requete_num->fetch();
        $num = $num[0];
        $sql2 = "SELECT id, nom, prenom, numero, adresse, code_postal, ville, Club FROM joueur WHERE Club = ".$num."";
        $requete_getjoueurs=$this->connexion->query($sql2);
        $liste1=array();
        while ($ligne1=$requete_getjoueurs->fetch(PDO::FETCH_OBJ)){
            $j1 = new Joueur();
            $j1->setId($ligne1->id);
            $j1->setNom($ligne1->nom);
            $j1->setPrenom($ligne1->prenom);
            $j1->setNumero($ligne1->numero);
            $j1->setAdresse($ligne1->adresse);
            $j1->setCp($ligne1->code_postal);
            $j1->setVille($ligne1->ville);
            $j1->setClub($ligne1->Club);
            $liste1[]=$j1;
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