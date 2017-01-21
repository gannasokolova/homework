<?php
if($_GET && $_GET['file']) {
    $filename = $_GET['file'];
    $filePath = "Img" . DIRECTORY_SEPARATOR . $filename;
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename='.$filename);
    header('Content-Length: ' . filesize($filePath));
    readfile($filePath);

    function writeFile($arr, $file)
    {
        $arr = serialize($arr);
        file_put_contents($file, $arr);
    }

    $file = 'stat.txt';
    if (file_exists($file)) {
        $stat = unserialize(file_get_contents($file));
    }
    if ($stat) {
        $ret = false;
        foreach ($stat as $key => $value) {
            if ($value['filename'] == $filename) {
                $stat[$key]['filename'] = $filename;
                $stat[$key]['downloadCount'] = $stat[$key]['downloadCount'] + 1;
                $ret = true;
            }
        }
        if (!$ret) {
            $stat[] = [
                'filename' => $filename,
                'downloadCount' => 1
            ];
        }
        writeFile($stat, $file);
    } else {
        $stat[] = [
            'filename' => $filename,
            'downloadCount' => 1
        ];
        fclose(fopen($file, w));
        if (file_exists($file)) {
            writeFile($stat, $file);
        }
    }
}