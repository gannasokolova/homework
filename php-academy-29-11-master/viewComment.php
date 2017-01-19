
<?php
include_once('config.php');
include_once('viewFunction.php');

$arrComments = getArrayCommentFromFile($config);
    if($arrComments){
        viewComment($arrComments);
    }

