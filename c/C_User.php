<?php
//
// ����������� �������� ������.
//
include_once('m/model.php');


class C_User  extends C_Base
{
    
	//public function action_index(){
	//	$this->title .= '::������';
	//	$text = text_get();
	//	$this->content = $this->Template('v/v_index.php', array('text' => $text));	
	//}



	
	function action_logout() {
		$logout = new User();
        $result = $logout->logout();
        header('location: index.php');
        exit();
	}

	public function action_cabinet() {

		$this->title .= '::Вход';
	
		if($this->isPost()) {
			$login = new User();
			$text = $login->author($_POST['login'], $_POST['passwd']);
			if ($text) {
                $logout= new Basket();
				$text= $logout->basket($_SESSION['user_id']);
				$this->content = $this->Template('v/v_cabinet.php', array('text' => $text));
			} 
			else {
				$this->content = $this->Template('v/v_author.php', array('text' => $text));
			}
		}
		else if(isset($_SESSION['user_id'])){
			$logout= new Basket();
                                    $text= $logout->basket($_SESSION['user_id']);
			$this->content = $this->Template('v/v_cabinet.php', array('text' => $text));	
			}
		else{
			$this->content = $this->Template('v/v_author.php', array());
			}
	}

	public function action_registration(){
		$this->title .= '::Регистрация';
        $login = new User();
		if($this->isPost())
		{
			$login->registration($login,$password,$name,$call);
			header('location: index.php');
			exit();
		}
		$this->content = $this->Template('v/v_registration.php', array('text' =>''));		
	}

}

