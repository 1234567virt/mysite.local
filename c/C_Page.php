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
		$this->content = $this->Template('v/v_index.php', array('text' => ""));	
	}






}

