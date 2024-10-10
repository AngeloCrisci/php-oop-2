



<?php 

class Products {
    public string $name;
    public float  $price;
    public string $imageUrl;
    public string $description;
    public string $icon;

    function __construct( string $name , float $price , string $imageUrl , string $description , string $icon )
    {
        $this->name = $name;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->description = $description;
        $this->icon = $icon;
    }

}









?>