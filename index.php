<?php

require_once __DIR__ . "/db.php";




$products = [
    $product_1,
    $product_2,
    $product_3,
    ]



?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP-2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script defer src="./main.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js"></script>
        <script defer src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <link rel="stylesheet" href="./style/style.css">
    </head>

<body>

    <h1 class="text-center">MY SHOP</h1>
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach($products as $product) { ?>
            <div class="card col-4 h100">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $product->name  ?>
                    </h5>
                    <h5 class="card-title">
                        <?=   get_class($product)  ?>
                    </h5>
                    <p class="card-text">
                        Prezzo : <strong><?= $product->price  ?></strong>
                    </p>
                    <p class="card-text">
                       Descrizione <strong><?= $product->description ?></strong>
                    </p>
                    <p class="card-text">
                       Per: <strong><?= $product->category->type ?></strong>
                    </p>
                    <?php if ($product instanceof FoodPet) { ?>
                       <p class="card-text"> Tipologia: <strong><?= $product->state ?></strong></p>
                       <p class="card-text"> Valori Nutrizionali: <strong><?= $product->nutritional_value ?></strong></p>
                       <p class="card-text"> Durata: <strong><?= $product->expiration_date ?></strong></p>  
                    <?php }  else if  ($product instanceof Toys) { ?>
                        <p class="card-text"> Resistenza: <strong><?= $product->durability  ?></strong> </p>
                     <?php }  else if  ($product instanceof Kennel ) { ?>
                    <p class="card-text"> Grandezza : <strong><?= $product->size  ?></strong> </p>
                    <p class="card-text"> Materiali : <strong><?= $product->material  ?></strong> </p>
                <?php } ?>
                    
                    
                </div>
            </div>
        <?php } ?>    
        </div>
    </div>

</body>
</html>