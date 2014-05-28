<?php
$action = $_REQUEST['action'];
switch($action)
{

	case 'ac':
	{
        include("vues/v_acligue.php");
  		break;
	}

    case 'fonction':
    {
        include("classes/fonctions.php");
        break;
    }
	
	case 'newmatch':
	{
        $listematch = $dao->findAll();
        $listecompet = $daocompetition->findAll();
		include("vues/v_newmatch.php");
  		break;
	}
    case 'validationnewmatch':
    {
        include ("vues/v_validationnewmatch.php");
        break;
    }
    case 'configmatch' :
    {
        $listematch = $daomatch->getmatchsresclubmodifmatch();
        $listejoueurs = $daojoueur->getjoueursresclub();
        include ("vues/v_configmatch.php");
        break;
    }
    case 'newcompetition':
    {
        include ("vues/v_newcompetition.php");
        break;
    }
    case 'validationcompetition':
    {
        include ("vues/v_validationcompetition.php");
        break;
    }
    case 'deco':
    {
        session_destroy();
        header("Location:index.php");
    }
}
?>

