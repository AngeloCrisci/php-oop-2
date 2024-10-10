<?php

class Toys extends Products {


    public static $product_type = 'Giocattoli';
    public $durability;

    function __construct( $product_type , string $name , float $price , string $imageUrl , string $description , Category $category , string $icon , $durability){
        parent::__construct($name ,  $price,   $imageUrl ,  $description, $category ,  $icon);
        $this->product_type = $product_type;
        $this->durability = $durability;

    }




}

    



?>