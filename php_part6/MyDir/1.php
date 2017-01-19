<?php

include_once('generalFunction.php');

if(copy('file_1.txt', 'file_a.txt')){
    echo "Файл file_a.txt успешно создан <br>";
}

$contentFile_1 = getFileContent('file_1.txt', " ");
$contentFile_2 = getFileContent('file_2.txt', " ");
if($contentFile_1 && $contentFile_2){
	$contentFile_b = array_merge($contentFile_1, $contentFile_2);

	putFileContent('file_b.txt', $contentFile_b);

	$contentFile_с = array_count_values($contentFile_b);

	foreach($contentFile_с as $key => $value){
		if($value >= 2){
			$contentFile_с_res[] = $key; 
		}
	}

	putFileContent('file_c.txt', $contentFile_с_res);
}
else{
	echo "Один из фалов не найден";
}
