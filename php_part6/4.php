<?php
include_once('generalFunction.php');

function processArrayValue($arr){
	foreach ($arr as $key => $value){
		($value > 1) ? $ret [] = $key : $ret;
	}
	return $ret;
}

$contentFile = file('file_6.txt');
if($contentFile){
	foreach ($contentFile as $value){
		$userData = explode(":", $value);
		$userName[] = $userData [0];
		$userMail[] = $userData [2];
	}
	$userNameCount = array_count_values($userName);
	$userMailCount = array_count_values($userMail);
	$userNameCount = processArrayValue($userNameCount);
	$userMailCount = processArrayValue($userMailCount);
	
	foreach ($contentFile as $value){
		$userData = explode(":", $value);
		if (!in_array($userData[0], $userNameCount) && !in_array($userData[2], $userMailCount)){			
			$contentFileRes[] = $value; 
		}
	}
	
	putFileContent('file_res_4.txt', $contentFileRes);
}
else{
	echo "File does not exist";
}
