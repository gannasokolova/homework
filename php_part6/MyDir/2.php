<?php

include_once('generalFunction.php');

$contentFile_1 = getFileContent('file_3.txt', ".");
$contentFile_2 = getFileContent('file_4.txt', ".");

if($contentFile_1 && $contentFile_2){
	$contentFile = array_count_values(array_merge($contentFile_1, $contentFile_2));
	foreach($contentFile as $key => $value){
		$key != " " ? $contentFileRes[] = $key."." : $contentFileRes;
	}

	putFileContent('file_res_2.txt', $contentFileRes);
	
	}
else{
	echo "Один из фалов не найден";
}

