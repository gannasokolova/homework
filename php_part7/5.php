<?php
session_start();
echo time() - $_SESSION['time'];
$_SESSION['time'] = time();
