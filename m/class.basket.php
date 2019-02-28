<?php
class Basket extends Connect{

     
     public $id;
     public function __construct () {
       
     }
     
     function getRequestsProduct(){
         $sql="SELECT * FROM `product`";
         $object=self::connecting();
         $result=$object->query($sql)->fetchAll();
          //   if($object->query('select count(*) from product')->fetchColumn()===0){
            //     die();
             //}
             //else{
               //  $product=$result->fetchAll();
                 //unset($object); 
          
         //}
     return $result;
     }
 
     function insert_basket($user_id,$name,$id_product,$count){
 
         $sql="INSERT INTO `basket_new` ( `id_user`, `id_product`, `name`, `count`) VALUES ('$user_id','$name','$id_product',$count)";
         $count="UPDATE `basket_new`  SET `count`=count+1 WHERE `id`='$id_product'";
         $object=self::connecting();
         $result=$object->query($sql);
         $object->query($count);
      }
    function update_basket($arg2,$name,$id_user){
 
         $sql="UPDATE `basket_new` SET  `count`='$arg2' where `name`='$name' and `id_user`='$id_user'";
         $object=self::connecting();
         $result=$object->query($sql);
      }
     function delete_basket($id,$id_user){
         $sql="DELETE FROM `basket_new` where `id_product`=$id and `id_user`=$id_user";
         $object=self::connecting();
         $result=$object->query($sql);
     } 
     function getSelectProduct($id){
         $sql="SELECT * FROM `product` where `id`=$id" ;
         $object=self::connecting();
         $result=$object->query($sql)->fetchAll(); 
     return $result;
     } 
 
     function basket($id_user){
         $sql="select product.src as `src`,basket_new.* 
         ,product.price as `price`,product.text as `text`, `basket_new`.count * `product`.price as `result` from `basket_new` left join `product` on `basket_new`.id_product=`product`.id where basket_new.id_user=$id_user ";
         $object=self::connecting();
         $result=$object->query($sql)->fetchAll(); 
     return $result;
     }
 
     function proverka($arg1,$arg2){
         $sql="select * from `product` where `number`>='$arg2' and `id`='$arg1'" ;
         $object=self::connecting();
         $result=$object->query($sql); 
   
          if($object->query('select count(*) from product')->fetchColumn()===0){
             
             return false;
              
             }
      return $result->fetchAll();     
 }
 
     function proverka_basket($name,$id){
         $sql="select * from `basket_new` where `name`='$name' and `id_user`='$id'";
         $object=self::connecting();
         $result=$object->query($sql)->fetchAll(); 
 
         if($object->query('select count(*) from `basket_new`')->fetchColumn()===0){
             
             return false;
             
             }
     return $result;       
     }
 }
?>