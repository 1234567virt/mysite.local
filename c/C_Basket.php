<?php
include_once('m/model.php');

class C_Basket extends C_Base
{
    public function action_catalog(){
		$this->title .= 'Каталог';
		if(isset($_SESSION['user_id'])){
		$logout = new Basket();
		$product= $logout->getRequestsProduct();
		$this->content = $this->Template('v/v_catalog.php', array('product' => $product));	
	}
	else{
		header('location.php');
	}
}


public function action_check(){
	$this->title.='Чек';
	if(isset($_SESSION['user_id'])){
		$logout=new Basket();
		
		$check=$logout->basket($_SESSION['user_id']);
		$this->content=$this->Template('v/v_check.php',array('check'=>$check));
	}
	else{
		header('location.php');
	}
}

}

?>