<?php
if ($_POST && $_POST['userName'] && !$_COOKIE['userName']){
        setcookie('userName', $_POST['userName'], time()+3600);
}
?>
<form method = 'post' action="<?=$_SERVER['PHP_SELF']?>">
    User name <input type="text" name="userName">
    <input type="submit">
</form>

