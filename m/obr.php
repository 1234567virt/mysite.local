<?php
require_once 'model.php';
session_start();
$obj=new Basket();

    if(isset($_GET['delete']) && isset($_GET['id'])){
      
        $arg1=$obj->clear($_GET['id']);
        $obj->delete_basket($_GET['id'],$_SESSION['user_id']);
        $arg2=$obj->clear($_GET['delete']);
     
       header("location:/index.php?c=user&act=cabinet");
    }
    else
    {
        if(isset($_GET['id']) && isset($_GET['count']))
        {
            $arg1=$obj->clear($_GET['id']);
            $arg2=$obj->clear($_GET['count']);  
         $count_save= $obj->proverka($arg1,$arg2);
           echo $arg1,$arg2;
         
                if($count_save===false)
                {
                    echo 'Нехватает продукции';
                    header('Location:index.php?c=user&act=cabinet');
                  die;
                }
                else
                {
                   // var_dump($count_save);
                    $user_id=$_SESSION["user_id"];
                   //echo $user_id;
                    foreach($count_save as $key=>$val)
                    {
                  
                        $count_basket=$obj->proverka_basket($val['id'],$_SESSION['user_id']);
                        //var_dump($count_basket);
                        if($count_basket==false)
                        {
                          
                         
                        
                        // echo $val["name"];
                         $obj->insert_basket($_SESSION['user_id'],$arg1,$arg2);
                         //echo $name;
                         header("Location:/index.php?c=basket&act=catalog");
                         die();
                        }
                        else
                        {
                            //$price_basket=$one["price"] * $arg2;
                            $obj->update_basket($arg2,$val['id'],$_SESSION['user_id']);
                           
                    //echo $val['name'];
                        }
                    }
                    header('Location:/index.php?c=user&act=cabinet');
              // echo 4;
                }
        }

        else
        {
            //echo 5;
           //  header('Location:/index.php?c=basket&act=catalog');  
        }
 
    }


?>