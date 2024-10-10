<?php

class FoodPet extends Products {

    public $state;
    public $nutritional_value;
    public $expiration_date;
    
    function __construct($state , $nutritional_value , $expiration_date)
    {
        $this->state = $state;
        $this->nutritional_value = $nutritional_value;
        $this->expiration_date = $expiration_date;
    }






}





?>