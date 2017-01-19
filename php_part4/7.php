<?php

function month($i){
    $month = [
        1 => "Января",
        "Февраля",
        "Марта",
        "Апреля",
        "Мая",
        "Июня",
        "Июля",
        "Августа",
        "Сентября",
        "Октября",
        "Ноября",
        "Декабря"];

        return $month[$i];
}
function dayOfWeek($i){
    $dayOfWeek =[
        1 => "понедельник",
        "вторник",
        "среда",
        "четверг",
        "пятница",
        "суббота",
        "воскресень"
    ];
        return $dayOfWeek[$i];
}

$today = explode(".", date("d.m.N"));
echo $today["0"]." ".month($today["1"]).",".dayOfWeek($today["2"]);
