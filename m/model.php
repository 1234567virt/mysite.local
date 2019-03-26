<?php
//require_once('m/PDOConnect.php');
class Connect{
    const HOST = 'localhost';
    const  NAME = 'php1level5';
    const  USER ='serj';
     const PASS=22121987;
    const  DRIVER='mysql';
    public function connecting () {
        return new PDO(self::DRIVER . ':host='. self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
    }
    function clear($val){
        $value=htmlspecialchars(strip_tags($val));
        return $value;
    }
}

class User extends Connect {
  
    function registration($login,$password,$name,$call){
    
        $login=self::clear($login);
        $password=self::clear($password);
        $name=self::clear($name);
        $call=self::clear($call);
        $password=password_hash ($password, PASSWORD_BCRYPT);
        $object=self::connecting();
        $sql="INSERT INTO `user`(`role`, `user_name`, `user_login`, `user_password`, `u_call`) VALUES
        ('user','$name','$login','$password','$call')";
        $object->query($sql);
      
   
  
    }
    public function __construct () {
    }

    function author($login,$password){
        $object=self::connecting();
    $sql="Select * from `user` where `user_login`='$login'";
    $user=$object->query($sql)->fetch();
        if($user['user_password']){
        
                if(password_verify($password,$user['user_password'])){
                    $_SESSION['user_id']=$user['id_user'];
                    $_SESSION['success_message']='Успешная авторизация';
                    $_SESSION['user']=$user['user_name'];
                    return 'Добро пожаловать в систему // ' .  $_SESSION['success_message']. '!';
                
                }
                else{
                return   "INVALID PASSWORD";
                }
            }
        else {
            return   "Неверный пользователь или пароль!!!";
            }

    }
    function logout(){
        if (isset($_SESSION["user_id"])) {
            $_SESSION["user_id"]=null;
            session_destroy();
            return true;
            } 
            return false;
        }
}
class Basket extends Connect{
   // public $user_id;
    
    public $id;
    public function __construct () {
       // $this->id=self::clear($id);
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


    function getRequestsProductNew(){
        $sql="SELECT * FROM `product` ORDER BY `id` DESC limit 3";
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

    function insert_basket($user_id,$id_product,$count){

        $sql="INSERT INTO `basket` ( `id_user`, `id_product`, `count`) VALUES ('$user_id','$id_product',$count)";
        $count="UPDATE `basket`  SET `count`=count+1 WHERE `id_product`='$id_product' and `id_user`='$id_user' ";
        $object=self::connecting();
        $result=$object->query($sql);
        $object->query($count);
     }
   function update_basket($arg2,$id_product,$id_user){

        $sql="UPDATE `basket` SET  `count`='$arg2' where `id_product`='$id_product' and `id_user`='$id_user'";
        $object=self::connecting();
        $result=$object->query($sql);
     }
    function delete_basket($id,$id_user){
        $sql="DELETE FROM `basket` where `id_product`=$id and `id_user`=$id_user";
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
        $sql="select product.src as `src`,basket.* 
        ,product.price as `price`,product.text as `text`,`product`.name, `basket`.count * `product`.price as `result` from `basket` left join `product` on `basket`.id_product=`product`.id where basket.id_user=$id_user ";
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

    function proverka_basket($idproduct,$id_user){
        $sql="select * from `basket` where `id_product`='$idproduct' and `id_user`=$id_user";
        $object=self::connecting();
        $result=$object->query($sql)->fetchAll(); 

        if($object->query('select count(*) from `basket`')->fetchColumn()===0){
            
            return 'error';
            
            }
    return $result;       
    }
}
    ?>