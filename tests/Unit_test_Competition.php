<?php
/**
 * Created by PhpStorm.
 * User: Loic
 * Date: 30/05/14
 * Time: 13:53
 *
 *
 *
 * Ceci est un exemple de test unitaire qui vérifie la création d'une compétition.
 
require_once('../classes/Competition.php');

class Unit_test_Competition  {

    Function testCreation() {
        $comp = new Competition();
        $comp->setNom('test');
        $this->assertTrue( $comp->getNom()=='test','ça marche' );
    }
} 
