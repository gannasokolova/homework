<?php
require_once ("session.php");
require_once ("config.php");
function validateField($field){
    if(!$_POST[$field]){
        $_SESSION['errors'][] = "Field {$field} is required";
        return false;
    }
    return true;
}

if($_POST){
    $ret = validateField('title');
    $ret = validateField('content') && $ret;
    $filePath = $config['content'].DIRECTORY_SEPARATOR."{$_POST['title']}.txt";
    if($ret){
        if(!file_exists($filePath)){
            fclose(fopen($filePath, 'w'));
            if(file_exists($filePath) && file_put_contents($filePath, $_POST['content'])){
                $_SESSION ['info'] = 'The article was published!';
            }else{
                $_SESSION['errors'][] = "Error writing file";
            }
        }else{
            $_SESSION['errors'] [] = "Title already exists";
        }
    }else{
        $_SESSION['title'] = $_POST['title'];
        $_SESSION['content'] = $_POST['content'];
    }
}
header("Location: http://{$_SERVER['HTTP_HOST']}/php-academy-29-11-content");
