<?php
require_once('basket.class.php');
require_once('summa.php');
class soft_basket extends basket{
    private $product_made;
    private $product_type;
   
    use Summa;
    function setProductMade($made){
        $this->product_made=$made;
    } 

    function setProductType($type){
        $this->product_type=$type;
    }
    function getProductType(){
        return $this->product_type;
    }
    function getProductMade(){
        return $this->product_made;
    }
    function __construct($type,$name,$price,$year,$made,$val){
       $this->setProductMade($made);
        $this->setProductType($type);
        parent::__construct($name,$year,$price,$val);
    }
 
    function getPrice(){
        parent::getPrice();
        return $this->getProductPrice() / 2;
    }
   
    function desk(){
        parent::desk();
        echo "<hr>Характеристики <br>Производитель:".$this->getProductMade().
       "<br>Тип:".$this->getProductType();
    
    }
}
$nout=new soft_basket('Операционная система',"Windows 7",1000,2005,"USA",5);
$nout->desk();
?>
