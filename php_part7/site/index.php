<?php
include_once ('setCookie.php');
?>
<form method = 'post' action="<?=$_SERVER['PHP_SELF']?>">
    User name <input type="text" name="userName">
    <input type="submit">
</form>