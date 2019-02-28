<?php 
function insert($link,$src,$name,$text,$number,$price){
mysqli_query($link ,"INSERT INTO `product` (`src`, `name`, `text`, `count`, `number`, `price`)
    VALUES ('$src','$name','$text','0','$number','$price')");
}

function update($link,$id,$src,$name,$text,$number,$price){
    mysqli_query($link ,"UPDATE `product` SET `src`='$src',
    `name`='$name',`text`='$text',`number`='$number',`price`='$price' WHERE `id`=$id");
 }

function delet($link,$id){
    mysqli_query($link,"DELETE FROM `product` where  id='$id'");
 } 
  

?>