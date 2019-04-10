<?php
include_once('m/model.php');

class C_Produkt extends C_Base
{
	
public function action_produkt(){
		$this->title .= "Ноутбук";
		
		if($this->isGet())
		{
		  $product=new Basket();
		
		  $text=$product->getSelectProduct($_GET['id']);
          
            $this->content= $this->Template('v/v_big-foto.php',array('text'=>$text));
            //header('location: index.php');
           //		exit();
	}
		
		else{
	$this->content = $this->Template('v/v_cabinet.php', array('text' => ''));		
	
		}
	}


	
}
	?>