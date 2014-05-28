<?php
/**
 * Created by PhpStorm.
 * User: Gatien
 * Date: 19/01/14
 * Time: 00:20
 */

class timeline {
    private $_id;
    private $_auteur;
    private $_date;
    private $_message;

    function __construct()
    {
    }

    /**
     * @param mixed $auteur
     */
    public function setAuteur($auteur)
    {
        $this->_auteur = $auteur;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->_auteur;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->_date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
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
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->_message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->_message;
    }




} 