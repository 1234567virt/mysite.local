<link rel="stylesheet" href="./v/css/basket.css" media="screen"> 
<link rel="stylesheet" type="text/css" href="./v/css/catalog.css" />
<center> <h2>Каталог</h2></center>
  <?php foreach($product as $key=>$val){?>
  <div class='gal'>
  <h4 class='name'><a href='index.php?c=produkt&act=produkt&id=<?=$val['id']?>'><?=$val['name']?></a></h4>
  <a href='index.php?c=produkt&act=produkt&id=<?=$val['id']?>'>
  <img src='./v/<?=$val['src']?>' width='70%' class='catalog' ></a>
  <h4 class="price" ><?=$val['price']?> $</h4>
  <a href="./m/obr.php?id=<?=$val['id']?>&count=1"><input type='button' class='basket' value="Корзина"></a>

  <a href='index.php?c=produkt&act=produkt&id=<?=$val['id']?>'><input type='button' class='basket'value="Подробней"></a>
</div>
 <? }?>
