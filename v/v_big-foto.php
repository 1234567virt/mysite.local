

<script type="text/javascript" src="./v/js/jquery-1-4-2.min.js"></script> 
<link rel="stylesheet" href="./v/css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="./v/js/slimbox2.js"></script> 
 <h1>Детальное описание</h1>
          <?php foreach($text as $key=>$val){?>
            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]" href='./v/<?=$val['src']?>'><img src='./v/<?=$val['src']?>' width='300' alt="image" /></a>
            </div>
            <div class="content_half float_r">
                <table>
                <tr>
                        <td>Модель:</td>
                        <td><?=$val['name']?></td>
                    </tr>
                    <tr>
                        <td width="160">Цена:</td>
                        <td><?php echo $val['price']."$" ; ?></td>
                    </tr>
                    <tr>
                        <td>Популярность:</td>
                        <td><?=$val['count']?></td>
                    </tr>
                    <tr>
                        <td>В наличии:</td>
                        <td><?php if($val['count']>0){
                          echo "Есть";
                        }
                          else{
                            echo "Отсутствует";
                        }?></td>
                    </tr>
                    <tr>
                      <td>Количество</td>
                      <form action="./m/obr.php">
                        <td><input type="number" name="count" value="1" style="width: 30px; text-align: right" /></td>
                    </tr>
                </table>
                <div class="cleaner h20"></div>
                <input type="hidden" name="id" value='<?=$val['id']?>' />
                 <button type="submit"  name='save' value='save'  style='border:0px solid transparent;background-color:transparent'> <img src='./v/images/templatemo_addtocart.jpg' style='border:0px solid transparent'></button>
                      </form>
      <p><?=$val['text']?><p> 
          
            <?php } ?>
          </div>