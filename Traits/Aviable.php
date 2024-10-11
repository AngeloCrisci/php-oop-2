<?php

trait Aviability {

    public int $max_stock;
    public int $now_stock;

    public function getAviability($max_stock , $now_stock){
        if ($now_stock > 0 ){
            return "Sono Disponibili $now_stock di questo articolo";
        }  else if ($max_stock < 0 || $now_stock > $max_stock) {
            throw new Exception('CONTROLLARE IL MAGAZZINO LUCA e MAURO!!!!');
        } else if ( empty($now_stock) ||  empty($max_stock) || $max_stock < 0  ){
            throw new Exception('Non puoi mettere un valore vuoto o negativo');
        }
    }

    








}

?>