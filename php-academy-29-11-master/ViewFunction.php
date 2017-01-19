<?php
function viewComment ($arr){
    foreach ($arr as $key=>$value) {?>
        <div class="col-md-12 col-md-offset-4 main_form" >
            <div class="col-md-12 time " > <?=$value['created_at']." ".$value['username']?> </div >
            <div class="message col-md-12 " > <?=$value['message']?></div >
        </div >
        <?php
    }
}

function getArrayCommentFromFile($config)
{
    if (!file_exists($config['database'])) {
        fclose(fopen($config['database'] . '', 'x'));
        return null;
    }else {
        $database = file_get_contents($config['database']);
        if ($database) {
            $arrComments = unserialize($database);
            return $arrComments;
        } else {
            return null;
        }
    }
}