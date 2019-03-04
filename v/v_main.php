<?php
/**
 * ������ ���������
 * ================
 * $text - ����� ������
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="./v/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="./v/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="./v/css/ddsmoothmenu.css" />

<script type="text/javascript" src="./v/js/jquery.min.js"></script>
<script type="text/javascript" src="./v/js/ddsmoothmenu.js">
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="#">Найдеться все</a></h1></div>
        <div id="header_right">
        	<p>
	        <a href="#">Мой акаунт</a> |  <a href="#">Карзина</a> | <a href="#">Выход</a> | <a href="#">Вход</a></p>
            <p>
            	Shopping Cart: <strong>3 items</strong> ( <a href="shoppingcart.html">Show Cart</a> )
              <?php echo  $_SESSION["user_id"]; ?>
            </p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Главная</a></li>
                <li><a href="index.php?c=basket&act=catalog">Каталог</a>
             
                </li>
                
                <li><a href="index.php?c=page&act=faq">Вопросы</a></li>
                <li><a href="index.php?c=user&act=registration">Регистрация</a></li>
                <li><a href="index.php?c=user&act=cabinet">Войти</a></li>
                <li><a href="index.php?c=page&act=contact">Контакты</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar -->
    
    <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Categories</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                    	<li class="first"><a href="#">Игровые</a></li>
                        <li><a href="#">Ультрабуки</a></li>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Suspendisse posuere</a></li>
                        <li><a href="#">Nunc a dui sed</a></li>
                        <li><a href="#">Curabitur ac mauris</a></li>
                        <li><a href="#">Mauris nulla tortor</a></li>
                        <li><a href="#">Nullam ultrices</a></li>
                        <li><a href="#">Nulla odio ipsum</a></li>
                        <li><a href="#">Suspendisse posuere</a></li>
                        <li><a href="#">Nunc a dui sed</a></li>
                        <li><a href="#">Curabitur ac mauris</a></li>
                        <li><a href="#">Mauris nulla tortor</a></li>
                        <li><a href="#">Nullam ultrices</a></li>
                        <li class="last"><a href="#">Sed eget purus</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
           
            </div>
        </div>
        <div id="content" class="float_r">
     
        	
			<div id="content">
            <?=$content?>
	</div>
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
    	<p><a href="index.php">Главная</a> | <a href="index.php?c=basket&act=catalog">Продукты</a> | <a href="#">About</a> | <a href="index.php?c=page&act=faq">Вопросы</a> | <a href="index.php?c=page&act=contact">Контакты</a>
		</p>

    	mysite.local © 2072 <a href="#">Мир ноутбуков</a> <!-- Credit: www.templatemo.com --></div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->

</body>
</html>