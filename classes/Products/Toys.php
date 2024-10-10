<?php

class Toys extends Products {

    public $softness;

    function __construct($softness){
        parent::__construct();
        $this->softness = $softness;

    }




}

    



?>