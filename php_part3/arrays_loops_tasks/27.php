<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 17.12.2016
 * Time: 11:50
 */
$row = 10;
$col = 10;
$colors = [
    'red',
    'yellow',
    'blue',
    'gray',
    'maroon',
    'brown',
    'green'];

echo "<table border='2'>";
for ($row = 1; $row <=10; $row++){
    echo "<tr>";
    for($col = 1; $col <= 10; $col++){
        $num = rand(1, 100);
        $color = rand(0, 6);
        echo "<td bgcolor = $colors[$color]>".$num."</td>";
    }
    echo "</tr>";
}

echo "</table>";
