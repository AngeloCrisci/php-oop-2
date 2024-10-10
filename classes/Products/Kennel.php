<?php 


class Kennel extends Products {


    public static $product_type = 'Cucce';
    public $size;
    public $material;


    function __construct( $product_type , string $name , float $price , string $imageUrl , string $description , Category $category , string $icon , $size , $material)
    {
        parent::__construct($name ,  $price,   $imageUrl ,  $description, $category ,  $icon);
        $this->product_type = $product_type;
        $this->size = $size;
        $this->material = $material;

    }




}




?>