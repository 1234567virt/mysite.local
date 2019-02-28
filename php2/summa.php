<?php
require_once('basket.class.php');
trait Summa {
    function getItog(){

        return $this->getPrice() * $this->getProductValue();
        
    }
} ?>