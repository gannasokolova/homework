<?php
$dirPath = __DIR__.DIRECTORY_SEPARATOR."Img";
$arr = scandir($dirPath);

foreach ($arr as $item) {
    if($item != '.' && $item != '..'){
        echo "$item"; ?>
        <a href="download.php?file=<?= $item?>">Скачать файл</a><br>
        <?php
    }
}
