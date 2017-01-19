<?php
function diff($date_1, $date_2)
{
    $date_diff = date_diff($date_2, $date_1, true);
    $result["y"] = $date_diff ->format('%y');
    $result["m"] = $date_diff->format('%m');
    $result["d"] = $date_diff->format('%d');
    $result["h"] = $date_diff->format('%h');
    $result["i"] = $date_diff->format('%i');
    $result["s"] = $date_diff->format('%s');
    return $result;
}

$date_1 = new DateTime('2016-07-20 19:30:30');
$date_2 = new DateTime('2014-06-19 18:25:25');
$arr = diff($date_2, $date_1);

echo "<pre>";
print_r($arr);
echo "</pre>";