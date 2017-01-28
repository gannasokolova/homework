<?php
require_once ("config.php");
if($_GET['name']){
    header('Content-Description: File Transfer');
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename=' . basename($_GET['name']));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($config['content'].DIRECTORY_SEPARATOR.$_GET['name']));
    readfile($config['content'].DIRECTORY_SEPARATOR.$_GET['name']);
    exit;
}
else{
    header("Location: ".$_SERVER['HTTP_REFERER']);
}