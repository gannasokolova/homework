<?php
include_once('generalFunction.php');
$alf = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

$contentFile = getFileContent('file_5.txt', " ");
if($contentFile){
	foreach ($alf as $value_1){
		foreach($contentFile as $value){		
			$firstLetter = mb_strtolower(substr ($value, 0, 1));
			if($firstLetter == $value_1){
				$contentFileRes[] = $value; 				
			}
		}		
	}
	putFileContent('file_res_3.txt', $contentFileRes);
}
else{
	echo "File does not exist";
}

