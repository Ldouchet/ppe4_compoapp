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
 * "PHPUnit_Framework_TestCase" provient du framework de tests unitaires PHPUnit open source dédié au langage de programmation PHP
 */
require_once('Competition.php');

class Unit_test_Competition extends PHPUnit_Framework_TestCase {

    function Unit_test_Competition() {
        $this->Unit_test_Competition();
    }

    Function testCreation() {
        $comp = new Competition();
        $comp->setNom('test');
        $this->assertTrue( $comp->getNom()=='test','ça marche' );
    }
} 