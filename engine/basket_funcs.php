<?php
 function insert_basket($link,$name,$count,$ids){
    mysqli_query($link ,"INSERT INTO `basket_new` ( `id_product`, `name`, `count`) VALUES ('$ids','$name',$count)");
    
 }
  
  function delete_basket($link,$id){
    mysqli_query($link,"DELETE FROM `basket_new` where `id`='$id'" );
} 
function getSelectProducts($link,$id){
 $result=mysqli_query($link,"SELECT * FROM `product` where `id`=$id" ) or die("Ошибка " . mysqli_error($link)); 
  return $result;
} 



?>  