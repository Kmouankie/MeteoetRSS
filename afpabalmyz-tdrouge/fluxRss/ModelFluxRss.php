<?php

class ModelFluxRss{

    private $dao;

    function __construct() {

        Conf::setFlux();
        $this->dao = new DAO_RSS();

    }
    function selectFluxRss($a){

        $result = $this->dao->requete(Conf::$fluxRSS[$a]);
        return $result;

    }
}