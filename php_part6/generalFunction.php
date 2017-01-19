<?php

function getFileContent($fileName, $strExplode){
	if(file_exists($fileName)){
		$contentFile = explode($strExplode, file_get_contents($fileName, true));	
		return $contentFile;
	}
	return null;
}

function putFileContent($fileName, $array){
	fclose(fopen($fileName, w));
	if(file_exists($fileName) && file_put_contents($fileName, implode(" ", $array))){
		echo "Файл {$fileName} успешно создан <br>";
	}
}