<?php


require_once __DIR__ . '../../../Traits/Aviable.php';

class Toys extends Products {

    use Aviability;


    public static $product_type = 'Giocattoli';
    public $durability;

    function __construct(  string $name , float $price , string $imageUrl , string $description , Category $category , string $icon , $durability){
        parent::__construct($name ,  $price,   $imageUrl ,  $description, $category ,  $icon);
        $this->durability = $durability;

    }




}

    



?>