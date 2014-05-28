<div id="banniere">COMPOMATCH - GESTION DE MATCH ET D'EQUIPE</div>

<!--  Menu haut
<ul id="menu">
	<li><a href="index.php?uc=accueil"> Accueil </a></li>
    <li><a href="index.php?uc=admin&action=newmatch"> Nouveau match </a></li>
</ul>

-->

<div id='cssmenu'>
	<ul>
	<li ><a href='index.php?uc=admin&action=ac'><span>Matchs</span></a></li>
    <?php
        if($_SESSION['statut'] == "resligue"){
            echo "<li><a href='index.php?uc=admin&action=newmatch'><span>+ Ajouter un match</span></a></li>";
        }

    ?>
    <?php
    if($_SESSION['statut'] == "resligue"){
        echo "<li><a href='index.php?uc=admin&action=newcompetition'><span>+ Ajouter une compétition</span></a></li> ";
    }

    ?>
    <?php
    if($_SESSION['statut'] == "resclub"){
        echo "<li><a href='index.php?uc=admin&action=configmatch'><span>+ Configurer un match</span></a></li> ";
    }

    ?>


    <li><a href="index.php?uc=timeline&action=ac" ><span><?php echo("Bonjour ".$_SESSION['nom']." !"); ?></span></a></li>
    <li class='last'><a href='index.php?uc=admin&action=deco'><span>Deconnexion</span></a></li>
        <img src="util/img/arbitre.png" style="float: right">
    </ul>
	</div>
</div>
