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



}

?>