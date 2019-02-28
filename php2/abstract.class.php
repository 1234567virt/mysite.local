<?php 
abstract class  Product {
    abstract function getPrice();
    abstract function getItog();
    abstract function desk();
    function __get($val){
        echo "ошибка";
    }
} 

?>