<link rel="stylesheet" type="text/css" href="./v/css/catalog.css" />
<div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="./v/images/slider/02.jpg" alt="" />
                    <a href="#"><img src="./v/images/slider/01.jpg" alt="" title="This is an example of a caption" /></a>
                    <img src="./v/images/slider/03.jpg" alt="" />
                    <img src="./v/images/slider/04.jpg" alt="" title="#htmlcaption" />
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> <?=$text?> <em>HTML</em>  <a href="#">a link</a>.
                </div>
            </div>
            <script type="text/javascript" src="./v/js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="./v/js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
         <h1>Новинки</h1>
  <?php foreach($product as $key=>$val){?>
    <div class='gal'>
    <h4 class='name'><a href='product.php?id='<?=$val['id']?>'><?=$val['name']?></a></h4>
    <a href='galerybig.php?id=<?=$val['id']?>' target='_blank'>
    <img src='./v/<?=$val['src']?>' width='50%' class='catalog' ></a>
    <h4 class="price" ><?=$val['price']?> $</h4>
    <a href="./m/obr.php?id=<?=$val['id']?>&count=1"><input type='button' class='basket' value="Корзина"></a>
  
    <a href='index.php?c=produkt&act=produkt&id=<?=$val['id']?>'><input type='button' class='basket'value="Подробней"></a>
  </div>
   <? }?>
  
