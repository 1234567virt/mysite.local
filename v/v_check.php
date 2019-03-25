
<?php
$h1="Купить!!!!";
$year=date("Y");
?>
   
        <script type="text/javascript" src="https://use.fontawesome.com/452826394c.js"></script>
        <link rel="stylesheet" href="./v/css/basket.css" media="screen"> 
        <link rel="stylesheet" href="./v/css/print.css" media="print" > 
               <center>  <h1><?=$h1?></h1></center>
            <table width="680px" style="margin:auto;color:black;" cellspacing="0" cellpadding="5">
                       	  <tr bgcolor="#ddd">
                        	<th width="220" align="left">Изображение</th> 
                        	<th width="180" align="left">Название </th> 
                       	  	<th width="100" align="center">Количество </th> 
                        	 
                        	<th width="60" align="right">Всего </th> 
                        	<th width="90"> </th>
                        </tr>
               <?php
    foreach($check as $key=>$val){
?>
        <tr>
        <td><img src='./v/<?=$val['src']?>' width="40%"/></td> 
        <td><?=$val['name']?></td> 
        <td align="center"><input type="number" name="count" value='<?=$val['count']?>'  placeholder='0' id='select'  /> </td>
      
        <input type="hidden" name="name" value='<?=$val['name']?>'  placeholder='0' id='select'  />
        <td align="right"><?=$val['result']?>$ </td>
       <td align="center">
    </td>
        </tr>
  <?php } ?>
</table>		
   <a href="#"  onclick="window.print()"><i style="display:block;margin-left:50%;margin-top:1%" class="fa fa-3x fa-shopping-basket"></i></a>
   <center><?=$year?> г.</center>
  
