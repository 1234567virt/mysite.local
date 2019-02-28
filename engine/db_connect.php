<?php 
require_once '../engine/pass.php';
$link = mysqli_connect($host, $user,$password,$bd) 
    or die("Ошибка " . mysqli_error($link)); 
   // mysql_query('SET NAMES utf8');
    ?>