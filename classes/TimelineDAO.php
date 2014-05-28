<?php
require_once('/classes/MysqlDAO.php');
require_once('/classes/Timeline.php');

class TimelineDAO extends MysqlDAO {

    public function __construct(){
        parent::__construct();
    }

    public function create($c) {
        $auteur = $c->getAuteur();
        $date = $c->getDate();
        $message = $c->getMessage();
        $message = mysql_real_escape_string(htmlspecialchars($message));
        $sql="INSERT INTO  `match_fff`.`timeline` (`num` ,`auteur` ,`date` ,`message`) VALUES (NULL ,  '".$auteur."',  '".$date."',  '".$message."');";
        echo $sql;
        $requete_create=$this->connexion->query($sql) or die ("marche pas ");

    }

    public function update($t) {

    }

    public function delete($_id) {

    }

    public function findAll() {
        $sql1 = "select * from timeline ORDER BY num DESC";
        $requete_getmessages=$this->connexion->query($sql1);
        $liste1=array();
        while ($ligne1=$requete_getmessages->fetch(PDO::FETCH_OBJ)){
            $c1 = new Timeline();
            $c1->setId($ligne1->num);
            $c1->setAuteur($ligne1->auteur);
            $c1->setDate($ligne1->date);
            $c1->setMessage($ligne1->message);

            $json = array(
                'num' => $c1->getId(),
                'auteur'=> $c1->getAuteur(),
                'date'=> $c1->getDate(),
                'message'=> $c1->getMessage(),
            );
            $liste1[]=$json;
        }

        return $liste1;

    }

    public function findById($_id) {

    }

}
?>