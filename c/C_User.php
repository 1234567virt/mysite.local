<?php
//
// ����������� �������� ������.
//
include_once('m/model.php');


class C_User  extends C_Base
{
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
			if (isset($_SESSION['user_id'])) {
                $logout= new Basket();
				$text= $logout->basket($_SESSION['user_id']);
				$this->content = $this->Template('v/v_cabinet.php', array('text' => $text));
			} 
			else {
				$this->content = $this->Template('v/v_author.php', array('text' => ''));
			}
		}
		else if(isset($_SESSION['user_id'])){
			$logout= new Basket();
			$itog=$logout->check_sum($_SESSION['user_id']);
			 $text= $logout->basket($_SESSION['user_id']);
			$this->content = $this->Template('v/v_cabinet.php', array('text' => $text,'sum'=>$itog[0]['sums'],'prices'=>$itog[0]['prices']));	
			
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
			$login->registration($_POST['login'],$_POST['paswd'],$_POST['name'],$_POST['call']);
			header('location: index.php');
			exit();
		}
		$this->content = $this->Template('v/v_registration.php', array('text' =>''));		
	}

}

