<?php

require_once __DIR__ . '/classes/Products.php';
require_once __DIR__ . '/classes/Category.php';
require_once __DIR__ . '/classes/Products/FoodPet.php';
require_once __DIR__ . '/classes/Products/Toys.php';
require_once __DIR__ . '/classes/Products/Kennel.php';

$dog = new Category('Cane');
$cat = new Category ('Gatto');

$product_1 = new FoodPet (  'Cibo in scatola' , 13.50 , '...' , 'Cibo in scatola per il tuo cane ottimo per iniziare la giornata nei migliore dei modi!' , $dog , '...' , 'Solido' , 'Vitaminico' , 2030);
$product_2 = new Toys ('Corda da Tirare' , 8.30 , '...' , 'Fai divertire e sfogare il tuo cane' , $dog , '...' , 'Molto resistente');
$product_3 = new Kennel ( 'Cuccia per Cane' , 180.99 , '...' , 'Per Cani di Grande taglia ' , $dog , '...' , '1000x1000' , 'Legno');

?>