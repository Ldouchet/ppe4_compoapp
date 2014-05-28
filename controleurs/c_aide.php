<?php
$action = $_REQUEST['action'];
switch($action)
{

    case 'ac':
    {
        include("vues/v_aide.php");
        break;
    }

    case 'fonction':
    {
        include("classes/fonctions.php");
        break;
    }

}
?>

