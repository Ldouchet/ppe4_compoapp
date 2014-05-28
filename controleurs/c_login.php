<?php

$resu = 0;

if(!isset($_REQUEST['action'])){
     $action = 'connexion';
}
else{
	$action = $_REQUEST['action'];
}

switch($action)
{
	case 'connexion':
	{
  		include ("vues/v_login.php");
		break;
	}
	case 'requ_connexion':
	{
		if (isset($_POST['valider'])) {
			if ($_POST['login'] == 'resligue') {
				if ($_POST['mdp'] == 'toto') {
                    $_SESSION['statut']="resligue";
                    $_SESSION['nom']=$_POST['login'];
					header("Location: index.php?uc=admin&action=ac");
				}
				else { $resu=1; }
			}
            if ($_POST['login'] !== 'resligue') {
                $login=$_POST['login'];
                $mdp=$_POST['mdp'];
                $resultat = $dao->testLogAdmin($login, $mdp);
                if ($resultat[0] == 0){
                    $resu=1;
                }
                else {
                    $resu=0;
                    $_SESSION['statut']="resclub";
                    $_SESSION['nom']=$_POST['login'];
                    header("Location: index.php?uc=admin&action=ac");
                }
            }
			else { $resu=1; }
		}
		
		if ($resu = 1) { 
				echo '<script>alert ('.$login.');</script>'; include ("vues/v_login.php"); }
				
		break;
	}
}
?>