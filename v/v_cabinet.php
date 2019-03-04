<?php
/**
 * �������� ������
 * ===============
 * $title - ���������
 * $content - HTML ��������
 */
echo $_SESSION["user_id"];
?>
<center>  <h1></h1></center>
             <h3 style='margin:30px'> </span> </h3>
               <table width="680px" cellspacing="0" cellpadding="5">
                       	  <tr bgcolor="#ddd">
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
        //require_once('../templates/basket/basket_form.php');
        ?>
   
   <form action ='./m/obr.php'>
  <tr>
        <td><img src='<?=$val['src']?>' width="40%"/></td> 
        <td><?=$val['name']?></td> 
        <td align="center"><input type="number" name="count" value='<?=$val['count']?>'  min='0' max='15'
placeholder='0' id='select'  /> </td>
        <input type="hidden" name="id" value='<?=$val['id_product']?>'  placeholder='0' id='select'  />
        <input type="hidden" name="name" value='<?=$val['name']?>'  placeholder='0' id='select'  />
        <td align="right"><?=$val['price']?> $</td> 
        
     
        <td align="right"><?=$val['result']?>$ </td>
       <td align="center">
        <button type="submit"  name='save' value='save' style="background-color:blue;border-radius:4px;border:0px transparent"> <img src='/public_html/img/basket.png'></button>
<button type="submit" name='delete' value='delete' style="margin-top:3px;background-color:red;border-radius:4px;border:0px transparent"><img src='./public_html/img/rm.png'  style='width:17px;height:17px'></button>
    </td>
        </tr>
   </form>
  <?php
  } 
?>
</table>		
                    	
         </div>
         <a href="print.php" style=" margin-top:15px; display:inline-block; margin-left:150px;width:250px;height:30px;font-weight:bold;color:white;background:red;border-radius:7px;border:0px solid transparent;padding-top:10px; text-align:center">Нажми меня,я хочу тебя</a>
    </div>
</div>
	
