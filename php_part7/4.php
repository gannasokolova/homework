<?php
session_start();
if($_POST){
    if($_POST['fname'])
        $_SESSION['fname'] = $_POST['fname'];
    if($_POST['lname'])
        $_SESSION['lname'] = $_POST['lname'];
    if($_POST['phone'])
        $_SESSION['phone'] = $_POST['phone'];
}
?>

<form method = 'post' action="<?=$_SERVER['PHP_SELF']?>">
    First name <input type="text" name="fname" value="<?=$_SESSION['fname']? $_SESSION['fname'] : null; ?>"><br>
    Last name <input type="text" name="lname" value="<?=$_SESSION['lname']? $_SESSION['lname'] : null; ?>"><br>
    Phone <input type="phone" name="phone" value="<?=$_SESSION['phone']? $_SESSION['phone'] : null; ?>"><br>
    <input type="submit">
</form>
