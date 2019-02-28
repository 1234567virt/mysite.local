<?php
session_start();
require_once('../engine/requests.php');
require_once('../engine/db_connect.php');
require_once('../engine/funcs.php');
$login=isset($_POST['log'])?  $_POST['log'] : '';

$error='';
if(isset($login)){
        $login=$_POST['log'];
        
        $user=getUserEmail($link,$login);
      
        if($user){
               $_SESSION['user_id']=$user['id_user'];
               $_SESSION['success_message']='Успешная авторизация';
               header('Location:../public_html/print.php');
         
            }
      
}


  ?>