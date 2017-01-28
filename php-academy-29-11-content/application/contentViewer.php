<?php
function viewArticle($path, $name){
        $path .=DIRECTORY_SEPARATOR;
        $result = [];
        if(file_exists($path)){
            $forbiddenFolders  = ['.', '..'];
            $directoryHandler = opendir($path);
            while (false !== ($entry = readdir($directoryHandler)) ){
                if(!in_array($entry , $forbiddenFolders)){
                    if(fnmatch($entry, $name, FNM_CASEFOLD)){
                        ob_start();
                        echo file_get_contents($path.$entry);
                        $article = ob_get_contents();
                        ob_end_clean();
                        return [$article, $entry];
                    }
                }
            }

        }

  header("HTTP/1.0 404 Not Found");
  header("HTTP/1.1 404 Not Found");
  header("Status: 404 Not Found");
}