
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
       
                  <link rel="stylesheet" href="public_html/css/catalog.css">
    </head>
    <body id='templatemo_body' >
    
    <center><h1></h1></center>
    <center> <h2>Каталог</h2></center>
    <div style="margin-left:100px">
<?php foreach($product as $key=>$val){?>
  <div class='gal'>
  <h4 class='name'><a href='product.php?id='<?=$val['id']?>'><?=$val['name']?></a></h4>
  <a href='galerybig.php?id=<?=$val['id']?>' target='_blank'>
  <img src='<?=$val['src']?>' width='40%' class='catalog' ></a>
  <h4 class="price" ><?=$val['price']?> $</h4>
  <a href="./m/obr.php?id=<?=$val['id']?>&count=1"><input type='button' class='basket' value="Корзина"></a>

  <a href='index.php?c=produkt&act=produkt&id=<?=$val['id']?>'><input type='button' class='basket'value="Подробней"></a>
</div>
 <? }?>
<h2 style="margin:0 auto;">Галерея</h2>
          <hr>
                    <h2 style="margin:0 auto;"></h2>
         
</div>
    </div>