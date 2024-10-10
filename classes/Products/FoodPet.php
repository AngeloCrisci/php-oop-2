<?php

class FoodPet extends Products {

    public $state;
    public $nutritional_value;
    
    function __construct($state , $nutritional_value)
    {
        $this->state = $state;
        $this->nutritional_value = $nutritional_value;
    }






}





?>