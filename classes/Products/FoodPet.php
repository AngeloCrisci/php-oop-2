<?php

class FoodPet extends Products {

    public static $product_type = 'Cibo';
    public $state;
    public $nutritional_value;
    public $expiration_date;
    
    function __construct( $product_type, string $name , float $price , string $imageUrl , string $description , Category $category , string $icon ,$state , $nutritional_value , $expiration_date)
    {
        parent::__construct( $name ,  $price,   $imageUrl ,  $description, $category ,  $icon );
        $this->product_type = $product_type;
        $this->state = $state;
        $this->nutritional_value = $nutritional_value;
        $this->expiration_date = $expiration_date;
    }






}





?>