<?php
include_once('session.php');
session_destroy();
header("Location: http://{$_SERVER['HTTP_HOST']}/php-academy-29-11-content/");