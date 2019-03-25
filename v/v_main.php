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
<script>
</script>
<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="#">Найдеться все</a></h1></div>
        <div id="header_right">
        <?php if(isset($_SESSION['user_id'])){?>
        	   	<p>     <a href="#">Мой акаунт</a> | <a href="index.php?c=user&act=logout">Выход</a> |<a href="index.php?c=user&act=v_check.php">Купить</a></p>
            <p>
            	В корзине: <strong><?php //echo $count;?>продукта</strong> ( <a href="index.php?c=user&act=cabinet">Корзина</a> )
<?php } else {} ?>
            </p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
       <li><a href="index.php">Главная</a></li>
       <li> <a href="index.php?c=basket&act=catalog">Каталог</a></li>
       <li> <a href="index.php?c=page&act=contact">Контакты</a></li>
       <?php if(!isset($_SESSION['user_id'])){ ?>
       <li> <a href="index.php?c=user&act=registration">Регистрация</a></li>
       <li> <a href="index.php?c=user&act=cabinet">Вход</a></li>
       <?php 
       }
            else { ?>
       <li> <a href="index.php?c=user&act=cabinet">Личный кабинет</a></li>
       <?php } ?>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
 
    </div> <!-- END of templatemo_menubar -->
    
    <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Сортировка</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                    <li class="first"><a href="index.php/c=&act=">Популярность</a></li>
                        <li><a href="index.php/c=&act=">Рейтинг</a></li>
                        <li><a href="index.php/c=&act=">Цена</a></li>
                        <li><a href="index.php/c=&act=">Отзыв</a></li>
                        <li><a href="index.php/c=&act=">Акции</a></li>
                        <li><a href="index.php/c=&act=">Новинки</a></li>
                        <li class="last"><a href="index.php/c=&act=">Наличие</a></li>
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