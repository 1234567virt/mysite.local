<?php
require_once('basket.class.php');
require_once('summa.php');
class noutbook_basket extends basket{
    private $product_hdd;
    private $product_model;
    private $product_ram;
    private $product_price;
   
    use Summa;
 
    function setProductHdd($hdd){
        $this->product_hdd=$hdd;
    }

    function setProductModel($model){
        $this->product_model=$model;
    }

    function setProductProc($proc){
        $this->product_proc=$proc;
    }

    function setProductRam($ram){
        $this->product_ram=$ram;
    }


    function getProductHdd(){
        return $this->product_hdd;  
    }

    function getProductModel(){
        return $this->product_model;  
    }

    function getProductRam(){
       return $this->product_ram;
    }

    function getProductProc(){
       return  $this->product_proc;
    }
    
    function getPrice(){
        parent::getPrice();
        return $this->getProductPrice() * 1;
    }
    function __construct($hdd,$proc,$ram,$name,$price,$year,$model,$val){
        $this->setProductHdd($hdd);
        $this->setProductProc($proc);
        $this->setProductRam($ram);
        $this->setProductModel($model);
        $this->setProductProc($proc);
        parent::__construct($name,$year,$price,$val);
    }
    function desk(){
        parent::desk();
        echo
        "<hr>Характеристики <br>Модель:".$this->getProductModel().
        "<br>HDD:".$this->getProductHdd().
        "<br>Процессор:".$this->getProductProc().
        "<br>ОЗУ:".$this->getProductRam();
    }
}
$nout=new noutbook_basket(100,'Xeon',1024,'Asus',2400,2005,'F3SA',2);
$nout->desk();
?>
