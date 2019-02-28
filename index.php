<?php
session_start();
function __autoload($classname){
	include_once("c/$classname.php");
}
//session_start();
$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';

switch ($_GET['c'])
{
	case 'page':
		$controller = new C_Page();
		break;
	case 'basket':
		$controller = new C_Basket();
	
		break;
	case 'user':
		$controller = new C_User();
	
		break;
		case 'produkt':
		$controller = new C_Produkt($_GET['id']);
	
		break;
	default:
		$controller = new C_Page();
}

$controller->Request($action);
