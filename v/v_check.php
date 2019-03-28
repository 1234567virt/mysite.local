
<?php
$h1="Купить!!!!";
$year=date("Y");
?>
   
        <script type="text/javascript" src="https://use.fontawesome.com/452826394c.js"></script>
        <link rel="stylesheet" href="./v/css/basket.css" media="screen"> 
        <link rel="stylesheet" href="./v/css/print.css" media="print" > 
               <center>  <h1><?=$h1?></h1></center>
    <p>Счет:<?=$_POST['number']?></p>
    <p>ФИО:<?=$_SESSION['user']?></p>
    <p>Адрес:<?=$_POST['adres']?></p>
    <p>Дата:<?=$_POST['dost']?></p>
    <p>Сообщение:<?=$_POST['message']?></p>
               <table width="680px" style="margin:auto;color:black;" cellspacing="0" cellpadding="5">
                       	  <tr bgcolor="#ddd">
                        	<th width="220" align="left">Изображение</th> 
                        	<th width="180" align="left">Название </th> 
                       	  	<th width="100" align="center">Количество </th> 
                        	 
                        	<th width="60" align="right">Всего </th> 
                        	<th width="90"> </th>
                        </tr>
               <?php
    foreach($product as $key=>$val){
?>
        <tr>
        <td><img src='./v/<?=$val['src']?>' width="40%"/></td> 
        <td><?=$val['name']?></td> 
        <td align="center"><?=$val['count']?> </td>
      
        
        <td align="right"><?=$val['result']?>$ </td>
       <td align="center">
    </td>
        </tr>
  <?php } 
  
  ?>
</table>		
   <a href="#"  onclick="window.print()"><i style="display:block;margin-left:50%;margin-top:1%" class="fa fa-3x fa-shopping-basket"></i></a>
   <center><?=$year?> г.</center>
  
