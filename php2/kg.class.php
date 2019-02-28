<?php
require_once('basket.class.php');
require_once('summa.php');
class kg_basket extends basket{
    private $product_weight;
    private $product_shelf_life;
   
    use Summa;
    function setProductWeight($weight){
        $this->product_weight=$weight;
    } 

    function setProductShelfLife($shel){
        $this->product_shelf_life=$shel;
    }
    
    function getProductShelfLife(){
        return $this->product_shelf_life;
    }

    function getProductWeight(){
        return $this->product_weight;
    }

    function __construct($weight,$name,$price,$year,$shel,$val){
       $this->setProductWeight($weight);
      
       $this->setProductShelfLife($shel);
       parent::__construct($name,$year,$price,$val);
    }
 
    function getPrice(){
        parent::getPrice();
        return $this->getProductPrice() * $this->getProductValue();
    }
    function desk(){
        parent::desk();
        echo "<hr>Характеристики <br>Мера измерения:".$this->getProductWeight().
       "<br>Срок годности:".$this->getProductShelfLife();
       
      }

}
$nout=new kg_basket('кг',"Пшенка",1000,2005,"USA",2);
$nout->desk();
?>
