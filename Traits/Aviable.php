<?php

trait Aviability {

    public int $max_stock = 0;
    public int $now_stock = 0;

    public function getAviability(){ 
        
         if ($this->max_stock < 0 || $this->now_stock > $this->max_stock) {
            throw new Exception('CONTROLLARE IL MAGAZZINO LUCA e MAURO!!!!');
        } else if ( empty($this->now_stock) ||  empty($this->max_stock) || $this->max_stock < 0  ){
            throw new Exception('Non puoi mettere un valore vuoto o negativo');
        }else if ($this->now_stock > 0 ){
            return "Sono Disponibili $this->now_stock di questo articolo"; 
        }
    }

    








}

?>