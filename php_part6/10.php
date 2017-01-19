<form enctype="multipart/form-data" action=<?= $_SERVER['PHP_SELF'];?> method="POST">    
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    Отправить этот файл: <input name="file" type="file" />
    <input type="submit" value="Send File" />
</form>

<?php

$uploaddir = __DIR__;
$uploadDirName = MyDir;


if($_FILES){	
	if (!is_dir($uploadDirName) && !mkdir($uploadDirName, 0777, true)) {
		die('Ошибка создания директории {$uploadDir}');
	}
	$uploadfile = $uploaddir .DIRECTORY_SEPARATOR.$uploadDirName.DIRECTORY_SEPARATOR. basename($_FILES['file']['name']);
	if (is_dir($uploadDirName) && move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
		echo "Файл корректен и был успешно загружен.\n";
	} else {
		echo "Файл не загружен.\n";
	}	
}
		
