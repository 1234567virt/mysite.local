<?php 

 function translite($text) {
  $alfavit=[
  "а" => 'a','б' => 'b','в'=> 'v',
  'г' => 'g','д' => 'd','е' => 'e',
  'ё' => 'e','ж' => 'zh','з' => 'z',
  'и' => 'i','й' => 'i','к' => 'k',
  'л' => 'l','м' => 'm','н' => 'n',
  'о' => 'o','п' => 'p','р' => 'r',
  'с'=>'s', 'т' => 't','у' => 'u',
  'ф' => 'f','х' =>'kh','ц' => 'ts',
  'ч' => 'ch','ш' => 'sh','щ'=> 'shch',
  'ъ'=>'ye ','ы' => 'y','э' => 'e',
  'ю' => 'iu','я' =>'ia'];
    $text = (string) $text;
    $text = function_exists('mb_strtolower') ? mb_strtolower($text) : strtolower($text);
    $text = strtr($text,$alfavit);
    return $text; 
}

function replace($string)
{
    return str_replace([' ', '\''], ['_', ''], $string);
}
function url_translite($text){
  
 return replace(translite($lower));
  }


function one($path){
    $dir=scandir($path);
        foreach($dir as $key=>$val){
            if($val==='.' || $val==='..'){
                continue;
            }
            else{
                if(is_dir($path.$val)){
                     $dir=one($path.$val.DIRECTORY_SEPARATOR);
                }
                 else{
                     $info=pathinfo($path.$val);
                    if($info['extension']=='jpg'){
                     echo "<a href='".$path.$val."' target='__blank'><img src='".$path.$val."' class='catalog' width='30%'></a>";
                
                    }  
  
                         
                }
            }   
         }
}

function counts($row,$id,$link,$bd){
    $sql="UPDATE $bd SET `count`=count+1 WHERE `id`='$id'";
    $result=mysqli_query($link,$sql);
}

function clear($link,$value){
    $value= mysqli_real_escape_string($link,  
    htmlspecialchars(
    strip_tags($value)));
    return $value;
}

function registration($link,$login,$name,$call){
    if(isset($login)  && isset($name) && isset($call)){
      $login=clear($link,$login);
      
      $name=clear($link,$name);
      $call=clear($link,$call);
     
      mysqli_query($link ,"INSERT INTO `user_new`(`role`, `user_name`, `user_login`, `u_call`) VALUES
            ('user','$name','$login','$call')");
            
    }
    else{
      echo "Ошибка пустые данные";
  
    }
  }


  ?>