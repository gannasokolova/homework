<?php
include_once('generalFunction.php');

$uploaddir = __DIR__;
$uploadfile = $uploaddir .DIRECTORY_SEPARATOR. basename($_FILES['file']['name']);

if($_FILES['file']['type'] == "text/plain")
{
	if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
		echo "Файл корректен и был успешно загружен.<br>";

		$contentFile_1 = file($_FILES['file']['name']);
		$contentFile_2 = file('file_7_Ignore.txt');

		if($contentFile_1 && $contentFile_2)
		{
			foreach ($contentFile_1 as $value){
				if(!file_exists(trim(__DIR__.DIRECTORY_SEPARATOR.$value)) && !in_array($value, $contentFile_2)){
					$contentFileRes [] = $value;
				}	
			}

			putFileContent('file_res_7.txt', $contentFileRes);
		}
		else{
			echo "Один из фалов не найден";
		}
	} else {
		echo "Файл не загружен.<br>";
	}
}else {
		echo "Не правильный формат загружаемого файла <br>";
	}
