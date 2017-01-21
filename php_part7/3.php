<?php
if($_POST && !$_POST['click']){
    validateFiled('login');
    validateFiled('password');
    validateFiled('email');
    $ret [] = validateFiled('login');
    $ret [] = validateFiled('password');
    $ret [] = validateFiled('email');
    if(empty($ret[0]) && empty($ret[1]) && empty($ret[2])){
        setcookie('bttonVisible', 1, time() + 3600);
    }else{
        echo "$ret[0] $ret[1] $ret[2]";
    }
}
if($_POST && $_POST['click']){
    unset($_COOKIE['bttonVisible']);
}
function validateFiled($field){
    if(!$_POST[$field]){
        $str = "{$field} field required field.";
    }
    return $str;
}
?>

<form method = 'post' action="<?=$_SERVER['PHP_SELF']?>">
    <?php if ($_COOKIE['bttonVisible'] == 1): ?>
    <input type="submit" value="EXIT" name="click"><br><br><br>
        <?php endif; ?>
    Login <input type="text" name="login"><br>
    Password <input type="password" name="password"><br>
    Email <input type="email" name="email"><br>
    <input type="submit">
</form>

