<?php
trait Trait_Singl{
    public static function getInstance() {
        static $_instance;
        if ($_instance === null) {
            $_instance = new self();  
        }
        return $_instance;
    }

}

class Singleton {

    use Trait_Singleton;
    protected function __construct() {}
    protected function __clone() {}
    protected function __wakeup() {}    

  
    

}
?>