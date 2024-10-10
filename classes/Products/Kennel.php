<?php 


class Kennel extends Products {

    public $size;
    public $material;


    function __construct($size , $material)
    {
        $this->size = $size;
        $this->material = $material;

    }




}




?>