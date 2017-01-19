<?php

$access = 'file_8.txt';

if(file_exists($access)){
	$visits = file($access);
	$current_visitors = $visits[0];
}
else{
	$current_visitors = 0;
}
$current_visitors++;
$file = fopen($access, w);
fwrite($file, $current_visitors);
fclose($file);
