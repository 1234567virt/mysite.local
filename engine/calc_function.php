<?php
function plus ($p1,$p2){
    return $p1+$p2;
}

function minus ($p1,$p2){
    return $p1-$p2;
}

function del($p1,$p2){
    if($p1>0 && $p2>0){
    return $p1/$p2;
    }
    else{
        return 'Ошибка';
    }
}

function ymn($p1,$p2){
    return $p1*$p2;
}

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case '-':
           return minus($arg1,$arg2);
        break;
        case '+':
           return plus($arg1,$arg2);
        break;
        case "*":
           return ymn($arg1,$arg2);
        break;
        case "/":
           return del($arg1,$arg2);
        break;
    }
    
}
?>