<?php

function listFile($arr, $dirPath){
	foreach ($arr as $value){
		if($value != "." && $value != ".."){
			if(is_dir($value)){
				$dirPathNew = $dirPath.DIRECTORY_SEPARATOR.$value;
				 listFile(scandir($dirPathNew), $dirPathNew);
			}
			else{				
				echo $value."<br>";
			}
		}
	}
}
$arr = scandir(__DIR__);
listFile($arr, __DIR__);