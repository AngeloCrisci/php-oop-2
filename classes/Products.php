



<?php 

class Products {
    public string $name;
    public float  $price;
    public string $imageUrl;
    public string $description;
    public Category $category;
    public string $icon;

    function __construct( string $name , float $price , string $imageUrl , string $description, Category $category , string $icon )
    {
        $this->name = $name;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->description = $description;
        $this->category = $category;
        $this->icon = $icon;
    }

    public function getInfo(){
        
    }

}









?>