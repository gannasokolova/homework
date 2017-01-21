<?php
$uploaddir = __DIR__;
$uploadDirName = "Img";


if($_FILES){
    if ($_FILES['file']["type"] == "image/jpeg") {
        if (!is_dir($uploadDirName) && !mkdir($uploadDirName, 0777, true)) {
            echo 'Ошибка создания директории {$uploadDirName}';
        }
        $uploadfile = $uploaddir . DIRECTORY_SEPARATOR . $uploadDirName . DIRECTORY_SEPARATOR . basename($_FILES['file']['name']);
        if (is_dir($uploadDirName) && move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "Файл корректен и был успешно загружен.\n";
        } else {
            echo "Файл не загружен.\n";
        }
    }else{
        echo "Некорректный тип файла";
    }
}


if($_COOKIE['buttonVisible'] == 1){ ?>

    <form enctype="multipart/form-data" action=<?= $_SERVER['PHP_SELF'];?> method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="3145728" />
    Отправить этот файл: <input name="file" type="file" />
    <input type="submit" value="Send File" />
    </form>

    <a href="7.php"> Список файлов</a>
<?php
}
else{
    header("Location:login.php");
}