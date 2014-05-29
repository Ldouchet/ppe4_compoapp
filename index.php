<?php
//
session_start();
require_once('classes/ClubDAO.php');
require_once('classes/MatchDAO.php');
require_once('classes/JoueurDAO.php');
require_once('classes/CompetitionDAO.php');
require_once('classes/TimelineDAO.php');

$dao = new ClubDAO();
$daomatch = new MatchDAO();
$daocompetition = new CompetitionDAO();
$daotimeline = new TimelineDAO();
$daojoueur = new JoueurDAO();

if(!isset($_REQUEST['uc']) ){
     $uc = 'connexion';
}
else{
	$uc = $_REQUEST['uc'];
}

if (!isset($_SESSION['statut'])){
    if (isset($_REQUEST['action'])){
        if (!isset($_POST['login'])){
            $uc='connexion';
            $_REQUEST['action'] = 'connexion';
        }
    }else{
        $uc='connexion';
        $_REQUEST['action'] = 'connexion';
    }

}
switch($uc)
{
	case 'connexion':
		{
            include("vues/v_entete.php") ;
            include("controleurs/c_login.php");
            break;
        }
    case 'admin':
    {
        /*if(isset($_SESSION['statut'])){
            if ($_SESSION['statut']=="resligue"){
                header ("Location: index.php");
            };
        }
        else {header ("Location: index.php");}
        */
        include("vues/v_entete.php") ;
		include ("vues/v_bandeau.php");
		include("controleurs/c_gestionMatchs.php");
		break;}
    case 'fonctions':
    {
        include ("classes/fonctions.php");
        break;
    }

    case 'aide':
    {
        include("vues/v_entete.php") ;
        include ("vues/v_bandeau.php");
        include("controleurs/c_aide.php");
        break;
    }
    case 'timeline' :
    {
        include("vues/v_entete.php") ;
        include ("vues/v_bandeau.php");
        include("controleurs/c_timeline.php");
        break;
    }
}
?>