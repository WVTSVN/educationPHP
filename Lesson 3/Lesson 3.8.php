<?php


$areaArr = [
    'Ростовская область:' => ['Ростов-на-Дону', 'Шахты', 'Новочеркасск'],
    'Краснодарский край:' => ['Краснодар', 'Горячий ключ', 'Армавир'],
    'Республика Адыгея:' => ['Майкоп', 'Энем', 'Тахтамукай']
];






function searchCity($char, $arr)
{
    if (!is_array($arr) || !is_string($char)) {
        return print 'incorrect arguments.';
    }
    
    $wrongCity = 0;
    
    $cityCount = count($arr, COUNT_RECURSIVE) - count($arr);
    foreach ($arr as $key => $value) {
        for ($i = 0; $i < count($arr[$key]); $i++) {
            
            $explodeArr = preg_split('//u', $arr[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
            
            if ($explodeArr[0] == $char) {
                echo implode($explodeArr) . '<br>';
            } else {
                $wrongCity++;
                
                if ($wrongCity == $cityCount) {
                    return print "Города на букву '{$char}' в массиве нет.";
                }
            }
        }
    }
}

searchCity('К', $areaArr);

echo '<hr>';

?>