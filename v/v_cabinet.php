<?php
/**
 * �������� ������
 * ===============
 * $title - ���������
 * $content - HTML ��������
 */

?>
<script>
$(document).ready(function(){

$('#res').change(function(){
$.ajax({
type: "GET",
url: "show.php",
data: "count="+$("#res").val(),
success: function(html){
$("#count").html(html);
}
});
return false;
});

});
</script>
 
 <script type="text/javascript" src="./v/js/app2.js"></script>
 <style>
 #adress{
  display: none;
   width: 500px;

margin:auto;
border: 2px solid grey;

 }

 </style>
   <link rel="stylesheet" href="./v/css/basket.css" media="screen"> 
        <link rel="stylesheet" href="./v/css/print.css" media="print" > 
        <script type="text/javascript" src="https://use.fontawesome.com/452826394c.js"></script>
<p>  <?php echo "Здравствуйте-".$_SESSION['user']."<br>";?></p>
<center>  <h1>Корзина</h1></center>
             <h3 style='margin:30px'> </span> </h3>
               <table width="680px" cellspacing="0" cellpadding="5" >
                       	  <tr bgcolor="#3b3637" >
                        	<th width="220" align="left">Изображение</th> 
                        	<th width="180" align="left">Название </th> 
                       	  	<th width="100" align="center">Количество </th> 
                        	<th width="60" align="right">Цена </th> 
                        	<th width="60" align="right">Всего </th> 
                        	<th width="90"> </th>
                        </tr>
               <?php
            
   foreach ($text as $key=>$val)
    {
     
        ?>
   
   <form action ='./m/obr.php'>
  <tr>
        <td><img src='./v/<?=$val['src']?>' width="50%"/></td> 
        <td><a href='index.php?c=produkt&act=produkt&id=<?=$val['id_product']?>'><?=$val['name']?></a></td> 
        <td align="center"><input type="number" onfocus='counts()' id='res' name="count" value='<?=$val['count']?>'  min='0' max='15'
placeholder='0' id='select'  /> </td>
        <input type="hidden" name="id"  value='<?=$val['id_product']?>'  placeholder='0' id='select'  />
    
        <td align="right"><?=$val['price']?> $</td> 
        
     
        <td align="right" ><?=$val['result']?>$</td>
       <td align="center">
        <button type="submit"  name='save' value='save' style="background-color:blue;border-radius:4px;border:0px transparent"> <img src='./v/images/basket.png'></button>
<button type="submit" name='delete' value='delete' style="margin-top:3px;background-color:red;border-radius:4px;border:0px transparent"><img src='./v/images/rm.png'  style='width:17px;height:17px'></button>
    </td>
        </tr>
   </form>
  <?php
  } 
?>
<tr>
        <td>Итого</td>
        <td id='count'></td>
        <td colspan="4"></td>
</tr>
</table>	
<a href="#" id='oformit' onclick="showFun('adress')" style="margin-bottom:10px; margin-top:15px; display:inline-block; margin-left:125px;width:250px;height:30px;font-weight:bold;color:white;background:red;border-radius:7px;border:0px solid transparent;padding-top:10px; text-align:center">Оформить</a>
<div id='adress'>
<center><i>Заполните данные для оформления заказа.</i></center>
                <div id="contact_form">
                   <form method="post" style="margin-top:5%;margin-left:40%" name="contact" action="index.php?c=user&act=check">
                        
                        <label for="author">Номер счета:</label> <input type="number" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="adress">Адрес:</label> <input type="text" id="adress" name="adres" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
                        <label for="dost">Дата доставки:</label> <input type="date" name="dost" id="dost" class="input_field" />
                        <div class="cleaner h10"></div>
        
                        <label for="message">Сообщение:</label> <textarea id="message" name="message" rows="10" cols="10" class="required" style="width:270px;height:50px"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" class="submit_btn" name="submit" id="submit" value="Купить" />
                        
                    </form>
       <!-- <a href="index.php?c=basket&act=check_form" style=" margin-top:15px; display:inline-block; margin-left:150px;width:250px;height:30px;font-weight:bold;color:white;background:red;border-radius:7px;border:0px solid transparent;padding-top:10px; text-align:center">Нажми меня,я хочу тебя</a>
-->
</div>
</div>	
 