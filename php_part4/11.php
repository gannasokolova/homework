<?php

$translit_ru_en = [
    "а"=>"a",  "б"=>"b",  "в"=>"v",  "г"=>"g",
    "д"=>"d",  "е"=>"e",  "ё"=>"yo", "ж"=>"j",
    "з"=>"z",  "и"=>"i",  "й"=>"i",  "к"=>"k",
    "л"=>"l",  "м"=>"m",  "н"=>"n",  "о"=>"o",
    "п"=>"p",  "р"=>"r",  "с"=>"s",  "т"=>"t",
    "у"=>"y",  "ф"=>"f",  "х"=>"h",  "ц"=>"c",
    "ч"=>"ch", "ш"=>"sh", "щ"=>"sh", "ы"=>"i",
    "э"=>"e",  "ю"=>"u",  "я"=>"ya",

    "А"=>"A",  "Б"=>"B",  "В"=>"V",  "Г"=>"G",
    "Д"=>"D",  "Е"=>"E",  "Ё"=>"Yo", "Ж"=>"J",
    "З"=>"Z",  "И"=>"I",  "Й"=>"I",  "К"=>"K",
    "Л"=>"L",  "М"=>"M",  "Н"=>"N",  "О"=>"O",
    "П"=>"P",  "Р"=>"R",  "С"=>"S",  "Т"=>"T",
    "У"=>"Y",  "Ф"=>"F",  "Х"=>"H",  "Ц"=>"C",
    "Ч"=>"Ch", "Ш"=>"Sh", "Щ"=>"Sh", "Ы"=>"I",
    "Э"=>"E",  "Ю"=>"U",  "Я"=>"Ya",

    "ь"=>"",   "Ь"=>"",   "ъ"=>"",   "Ъ"=>""
];
$translit_en_ru = [
    "а"=>"a",  "b"=>"б",  "v"=>"в",  "g"=>"г",
    "d"=>"д",  "e"=>"е",  "yo"=>"ё", "j"=>"ж",
    "z"=>"з",  "i"=>"и",  "k"=>"к",  "l"=>"л",
    "m"=>"м",  "n"=>"н",  "o"=>"о",  "p"=>"п",
    "r"=>"р",  "s"=>"с",  "t"=>"т",  "y"=>"у",
    "f"=>"ф",  "h"=>"х",  "c"=>"ц",  "ch"=>"ч",
    "sh"=>"ш", "w"=> "в", "u"=>"ю",  "ya"=>"я",

    "A"=>"А",  "B"=>"Б",  "В"=>"В",  "G"=>"Г",
    "D"=>"Д",  "E"=>"Е",  "YO"=>"Ё", "J"=>"Ж",
    "Z"=>"З",  "I"=>"И",  "K"=>"К",  "L"=>"Л",
    "M"=>"М",  "N"=>"Н",  "O"=>"О",  "P"=>"П",
    "R"=>"Р",  "S"=>"С",  "T"=>"Т",  "Y"=>"У",
    "F"=>"Ф",  "H"=>"Х",  "C"=>"Ц", "Ch"=>"Ч",
    "Sh"=>"Ш", "W"=> "В", "U"=>"Ю",  "Ya"=>"Я"
];
function translit ($str, $translit){
    $str = strtr($str, $translit);
    return $str;
}

echo translit("Привет мир", $translit_ru_en)."<br>";
echo translit("Hello world", $translit_en_ru)."<br>";