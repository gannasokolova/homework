<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 22:23
 */
$a = 1;
echo "<table border='2'>";
do {
    $b = 1;
    echo "<tr>";
    do{
        echo "<td>" . $a * $b . "</td>";
        $b++;
    }while($b <= 9);
    echo "</tr>";
    $a++;
}
while($a <=9);
echo "</table>";

echo "<table border='2'>";
for ($a = 1; $a <10; $a++) {
    echo "<tr>";
    for ($b = 1; $b < 10; $b++){

        echo "<td>" . $a * $b . "</td>";
    }
    echo "</tr>";
}
echo "</table>";