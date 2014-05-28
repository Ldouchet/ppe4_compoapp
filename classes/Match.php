<?php

class Match {
	// Variables
	private $_num;
	private $_dateMatch;
	private $_epreuveMatch;
    private $_club1;
    private $_club2;


    /*
     * SCHEMA DE LA BASE DE DONNEES, POUR CORRESPONDANCE NOM DES CHAMPS
`numClub` INT(11) NOT NULL AUTO_INCREMENT,
`nomClub` VARCHAR(30) NOT NULL,
`adresseClub` VARCHAR(50) NOT NULL,
`cpClub` INT(5) NOT NULL,
`villeClub` VARCHAR(30) NOT NULL,
`telClub` VARCHAR(30) NOT NULL,
`mailClub` VARCHAR(30) NOT NULL,
`imgClub` VARCHAR(50) NOT NULL,
`codeFFF` INT(11) NOT NULL,
`mdpClub` VARCHAR(8) NOT NULL,
    */

    function __construct()
    {
    }

    /**
     * @param mixed $club1
     */
    public function setClub1($club1)
    {
        $this->_club1 = $club1;
    }

    /**
     * @return mixed
     */
    public function getClub1()
    {
        return $this->_club1;
    }

    /**
     * @param mixed $club2
     */
    public function setClub2($club2)
    {
        $this->_club2 = $club2;
    }

    /**
     * @return mixed
     */
    public function getClub2()
    {
        return $this->_club2;
    }

    /**
     * @param mixed $dateMatch
     */
    public function setDateMatch($dateMatch)
    {
        $this->_dateMatch = $dateMatch;
    }

    /**
     * @return mixed
     */
    public function getDateMatch()
    {
        return $this->_dateMatch;
    }

    /**
     * @param mixed $epreuveMatch
     */
    public function setEpreuveMatch($epreuveMatch)
    {
        $this->_epreuveMatch = $epreuveMatch;
    }

    /**
     * @return mixed
     */
    public function getEpreuveMatch()
    {
        return $this->_epreuveMatch;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->_num = $num;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->_num;
    }

}

?>
