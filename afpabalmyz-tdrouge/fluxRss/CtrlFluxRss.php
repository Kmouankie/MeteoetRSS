<?php

class CtrlFluxRss{

    private $vue;
    private $model;

    public function __construct()
    {
        $this->vue = new ViewFluxRss();
        $this->model = new ModelFluxRss();
    }

    function getFluxRss($a = null){
        
        $result = $this->model->selectFluxRss($a);

        $this->vue->afficherFluxRss($result,$a);
        //var_dump($result);

    }

}