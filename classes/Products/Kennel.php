<?php 


class Kennel extends Products {

    public $size;
    public $material;


    function __construct($size , $material)
    {
        parent::__construct();
        $this->size = $size;
        $this->material = $material;

    }




}




?>