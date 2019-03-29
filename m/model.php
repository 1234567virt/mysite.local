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
   
    
    public $id;
    public function __construct () {
     
    }
    
    function getRequestsProduct(){
        $sql="SELECT * FROM `product` ";
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
    //function getRequestsProductNew(){
     //   $sql="SELECT * FROM `product` order by `id` desc limit 3";
     //   $object=self::connecting();
    //    $result=$object->query($sql)->fetchAll();
    //return $result;
    //}
    

    function getRequestsProductFilter($val1){
        if($val1=='number'){
            $sql="SELECT * FROM `product` where `number`>0 order by $val1 desc";
        }
        else if($val1=='id'){
            $sql="SELECT * FROM `product` order by $val1 desc limit 3";
        }
        else if($val1=='xit'){
            $sql="SELECT `otziv_nout`.`name`,COUNT(`otziv_nout`.`name`) AS `kolvo`, `product`.* FROM `product` left join `otziv_nout` on `product`.`name`=`otziv_nout`.`name` where `product`.count>0 and `product`.number>0 group by `product`.`count` order by `kolvo` ";
        }
        else if($val1=='asc'){
            $sql="SELECT * FROM `product` order by $val1 asc limit 3";
        }
        else{
            $sql="SELECT * FROM `product` order by $val1 desc";
        }
            $object=self::connecting();
        $result=$object->query($sql)->fetchAll();
    return $result;
    }
    
    function getRequestsOtzivFilter(){
        $sql="SELECT `otziv_nout`.`id`,COUNT(`otziv_nout`.`name`) as `kolvo`,`otziv_nout`.`Aftor`, `product`.* FROM `otziv_nout` left join `product` on `otziv_nout`.`name`=`product`.`name` GROUP BY `otziv_nout`.`name` order by `kolvo` DESC";
        $object=self::connecting();
        $result=$object->query($sql)->fetchAll();
    return $result; 
    }

    function insert_basket($user_id,$id_product,$count){

        $sql="INSERT INTO `basket` ( `id_user`, `id_product`, `count`) VALUES ('$user_id','$id_product',$count)";
        $count="UPDATE `product`  SET `count`=count+1 WHERE `id`='$id_product'";
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
        $count="UPDATE `product`  SET `count`=count+1 WHERE `id`='$id'";
        $object->query($count);
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
    function check_form(){

    }
}
    ?>