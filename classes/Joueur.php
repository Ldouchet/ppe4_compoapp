<?php
/**
 * Created by PhpStorm.
 * User: Gatien
 * Date: 22/01/14
 * Time: 16:06
 */

class Joueur {
    private $_id;
    private $_nom;
    private $_prenom;
    private $_numero;
    private $_adresse;
    private $_cp;
    private $_ville;
    private $_club;

    function __construct()
    {
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->_adresse;
    }

    /**
     * @param mixed $club
     */
    public function setClub($club)
    {
        $this->_club = $club;
    }

    /**
     * @return mixed
     */
    public function getClub()
    {
        return $this->_club;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->_cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->_cp;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->_numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->_numero;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->_ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->_ville;
    }
}
?>