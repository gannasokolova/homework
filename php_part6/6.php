
<?php

function listFile($arr, $dirPath){
	foreach ($arr as $value){
		if($value != "." && $value != ".."){
			if(is_dir($value)){
				fileName($dirPath.DIRECTORY_SEPARATOR.$value, $value, "folder.jpg", true);	
			}
			else{
				
				switch (mime_content_type($dirPath.DIRECTORY_SEPARATOR.$value)){					
					case "text/x-php":						
						fileName($dirPath.DIRECTORY_SEPARATOR.$value, $value, "php-512.png");					
					break;
					case "text/plain":						
						fileName($dirPath.DIRECTORY_SEPARATOR.$value, $value, "text.png");					
					break;
					default:						
						fileName($dirPath.DIRECTORY_SEPARATOR.$value, $value, "all.jpg");					
					break;
				}
				
			}
		}
	}
}

function fileName($filePath, $fileName, $iconPath, $is_folder = false){
	$fileInfo = stat ($filePath);
	$dateTime = date("F j, Y, g:i a", $fileInfo[9]);
	$fileSize = ($is_folder) ? "Directory" : "Size: $fileInfo[7] byte";
	?>
	<div> <img src=<?=$iconPath?> width = '10'>
	<?= "{$fileName}, {$fileSize}  ,Modification: {$dateTime}"; ?> <br>
	<?php
}

if ($_POST['path']){
		$dirPath = $_POST['path'];
		if(is_dir($dirPath)){
			listFile(scandir($dirPath), $dirPath);
		}else{
			echo "Directory {$dirPath} does not exist";
		}
}else{
	echo "Error post";
}



