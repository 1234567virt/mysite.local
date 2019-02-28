<?php
require_once('abstract.class.php');
class basket extends Product {
    private $product_name;
    private $product_year;
    private $product_price;
    private $product_value;
 
  function getPrice(){
    //  return  $this->product_price=$price; 
    }
    function getItog(){
      //  return  $this->product_price=$price; 
      }
  function setProductName($name){
   $this->product_name=$name;
  }
  function setProductValue($val){
    $this->product_value=$val;
}
  function setProductYear($year){
   $this->product_year=$year;
  }
 
  function setProductPrice($price){
     $this->product_price=$price;
   }
  function getProductPrice(){
     return $this->product_price;
   }

  function getProductName(){
     return $this->product_name;
  }

  function getProductYear(){
     return $this->product_year;
  }
  function getProductValue(){
    return $this->product_value;
}
  function  __construct($name,$year,$price,$val){
      $this-> setProductName($name);
      $this-> setProductYear($year);
      $this-> setProductPrice($price);
      $this-> setProductValue($val);
  }
  
  function desk(){
      echo "Товар:".$this->getProductName().
      "<br>Цена:".$this->getPrice().
      "<br>Год выпуска:".$this->getProductYear().
      "<br>Количество:".$this->getProductValue().
      "<br>Итог:".$this->getItog();
     
  }
}
?>