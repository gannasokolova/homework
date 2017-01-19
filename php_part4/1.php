<?php

$array = ['a', 'b', 'c', 'd', 'e'];

function strProcess($value){
    $value = mb_strtoupper($value);
    return $value;
}

$array = array_map("strProcess", $array);
?>
<pre>
    <?php
    print_r($array);
    ?>
</pre>

<?php
$array_1 = ['a', 'b', 'c', 'd', 'e'];

function strProcess_1(array &$arr){
    foreach ($arr as $key => $value){
    $arr [$key] = mb_strtoupper($value);
    }
}

strProcess_1($array_1);
?>
<pre>
    <?php
    print_r($array_1);
    ?>
</pre>