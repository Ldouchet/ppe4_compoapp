<?php
if(isset($_REQUEST['data'])){
    if($_REQUEST["data"] == "listmatchs"){
        if($_SESSION['statut'] == 'resligue') {
        $p1 = $daomatch->getmatchs();
        echo (json_encode($p1));
        }
        if($_SESSION['statut'] == 'resclub') {
            $p1 = $daomatch->getmatchsresclub();
            echo (json_encode($p1));
        }
    }
    if($_REQUEST["data"] == "timeline"){
        $p1 = $daotimeline->findAll();
        echo (json_encode($p1));
    }

}
if(isset($_REQUEST['configTitulaire'])){
    $id = $_REQUEST['id'];
    $listT = $_REQUEST['configTitulaire'];
    $listR = $_REQUEST['configRempl'];
    $daojoueur->delete($id);
    if($listT[0] != ''){
        foreach ($listT as $joueur){
            $daojoueur->rec_titulaire($id,$joueur);
        }
    }
    if($listR[0] != ''){
        foreach ($listR as $joueur){
            $daojoueur->rec_remplacant($id,$joueur);
        }
    }
    header("Location:index.php?uc=admin&action=validationnewmatch");

}
if(isset($_POST['valider'])) {
    $m = new Match();
    $m->setDateMatch($_POST['date']);
    $m->setEpreuveMatch($_POST['competition']);
    $m->setClub1($_POST['domicile']);
    $m->setClub2($_POST['exterieur']);
    $daomatch->create($m);
    header("Location:index.php?uc=admin&action=validationnewmatch");
}
if(isset($_POST['validerCompet'])) {
    $c = new Competition();
    $c->setNom($_POST['epreuve']);
    $daocompetition->create($c);
    header("Location:index.php?uc=admin&action=validationcompetition");
}
if(isset($_POST['validerTimeline'])) {
    $c = new Timeline();
    $c->setAuteur($_POST['auteur']);
    $c->setDate($_POST['date']);
    $c->setMessage($_POST['message']);
    $daotimeline->create($c);
    header("Location:index.php?uc=timeline&action=ac");
}
?>