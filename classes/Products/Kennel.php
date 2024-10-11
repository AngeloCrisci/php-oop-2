<?php 

require_once __DIR__ . '../../../Traits/Aviable.php';

class Kennel extends Products {

    use Aviability;


    public static $product_type = 'Cucce';
    public $size;
    public $material;


    function __construct( string $name , float $price , string $imageUrl , string $description , Category $category , string $icon , $size , $material)
    {
        parent::__construct($name ,  $price,   $imageUrl ,  $description, $category ,  $icon);
        $this->size = $size;
        $this->material = $material;

    }




}




?>