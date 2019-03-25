<?php
require_once('model.php');
class PHPUnit extends PHPUnit_Framework_TestCase
{
    function logout(){
        if (isset($_SESSION["user_id"])) {
            $_SESSION["user_id"]=null;
            session_destroy();
            return true;
            } 
            return false;
        }
}
}
?>