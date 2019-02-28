<?php foreach($text as $key=>$val){?>
  <link rel="stylesheet" href="./public_html/css/style.css">
        <link rel="stylesheet" href="./public_html/css/product.css">
<img src='<?=$val['src']?>' width='600'  id='img'>
          <?php ?>
            <div id='title' ><?=$val['name']?></div>
            <center><h4><? echo "Цена:".$val['price']."$" ; ?></h4></center>
            <div id='long_text' id=''><span id='title_text'> Описание:</span>:<?=$val['text']?></div>
            
            <div id='count'>
            <center>
            <h4><?=$val['count']?></h4>
            <a href="./m/obr.php?id=<?=$val['id']?>&count=1"><input type='button' class='basket' value="Корзина"></a>
            </center></div>
<?php } ?>