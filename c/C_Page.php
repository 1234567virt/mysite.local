<?php
//
// ����������� �������� ������.
//
include_once('m/model.php');

class C_Page extends C_Base
{
	//
	// �����������.
	//
	
	public function action_index(){
		$this->title .= 'Главная';
		//$text = text_get();
		$logout = new Basket();
	
		$product= $logout->getRequestsProductFilter('id');
		$top= $logout->getRequestsProductFilter('count');
		$this->content = $this->Template('v/v_index.php', array('product' => $product),array('top' => $top));	
	}
	public function action_contact(){
		$this->title .= 'Связь';
		$this->content = $this->Template('v/v_contact.php', array('text' =>''));	
	}


	


}

