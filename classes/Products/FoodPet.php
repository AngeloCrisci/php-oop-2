<?php

class FoodPet extends Products {

    public $state;
    public $nutritional_value;
    public $expiration_date;
    
    function __construct($state , $nutritional_value , $expiration_date)
    {
        parent::__construct( "Cibo per Animali" , float $price,  string $imageUrl , string $description , string $icon );
        $this->state = $state;
        $this->nutritional_value = $nutritional_value;
        $this->expiration_date = $expiration_date;
    }






}





?>