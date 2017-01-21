<?php
$pageName = explode('/', $_SERVER['REQUEST_URI']);
$pageName = $pageName[4];
$pageName = substr_replace($pageName,'',-4);
if (!$_COOKIE[$pageName]){
    setcookie($pageName, date('l jS \of F Y h:i:s A'), time()+3600);
}else{
    $str = $_COOKIE[$pageName].';'.date('l jS \of F Y h:i:s A');
    setcookie($pageName, $str, time()+3600);
}
?>
<a href="index.php">Главная</a><br>
<a href="2.php">Вторая страница</a><br>
<a href="3.php">Третья страница</a><br>
<a href="4.php">Список посещенных страниц</a><br>
