<?php

$areaArr = [
    'Ростовская область:' => ['Ростов-на-Дону', 'Шахты', 'Новочеркасск'],
    'Краснодарский край:' => ['Краснодар', 'Горячий ключ', 'Армавир'],
    'Республика Адыгея:' => ['Майкоп', 'Энем', 'Тахтамукай']
];

function dispCity($arr)
{
    if (!is_array($arr)) {
        return print "incorrect argument '{$arr}'";
    }
    foreach ($arr as $key => $value) {
        echo $key . '<br>';
        for ($i = 0; $i < $arrLength = count($arr[$key]); $i++) {
            
            if ($i == $arrLength - 1) {
                echo $arr[$key][$i] . '.' . '<br>';
            } else {
                
                echo $arr[$key][$i] . ', ';
            }
        }
    }
}

dispCity($areaArr);

echo '<hr>';

?>
