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
	public function action_sort(){
		$this->title.='Сортировка';
		$logout = new Basket();
		if(isset($_GET['val1'])){
			$product= $logout->getRequestsProductFilter($_GET['val1']);
			
			$this->content = $this->Template('v/v_catalog.php', array('product' => $product));	
		}
		
		else{
			header('location.php');
		}
	}
//public function getRequestsProductNew(){
//	$this->title .= 'Новинки';
//	if(isset($_SESSION['user_id'])){
//	$logout = new Basket();
//	$product= $logout-> getRequestsProductFilter($val1,$val2);
//	$this->content = $this->Template('v/v_catalog.php', array('product' => $product));	
//}
//else{
//	header('location.php');
//}
//}

public function action_otziv(){
	$this->title .= 'Главная';
	//$text = text_get();
	$logout = new Basket();

	$product= $logout->getRequestsOtzivFilter();
	$this->content = $this->Template('v/v_catalog.php', array('product' => $product));	
}

public function action_check(){

	if(isset($_SESSION['user_id'])){
		$logout = new Basket();
		$product= $logout->basket($_SESSION['user_id']);
		$this->content=$this->Template('v/v_check.php',array('product'=>$product));
	}
	else{
		header('location.php');
	}
}

}

?>