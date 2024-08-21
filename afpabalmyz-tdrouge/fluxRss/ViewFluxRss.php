<?php

class ViewFluxRss{

    private $partials = "fluxRss/partials/";

    function __construct() {      
    
    }

    function afficherFluxRss($result,$a) {

        $partial = $this->partials . "fluxRss.html";
        include Conf::$templates . "template.html";
    }
    
}