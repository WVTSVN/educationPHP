// 3.1


<?php

$i = 1;
while ($i < 100) {
    if ($i % 3 == 0) {
        echo $i++ . ' ';
    }
    $i++;
}

echo '<br/>';

    
    
    

    
?>


// 3.2

<?php

$num = 0;
do {
    if ($num == 0) {
        echo $num . ' –  ноль.' . '<br/>';
        $num++;
    } elseif ($num % 2 != 0) {
        echo $num . ' – нечетное число.' . '<br/>';
        $num++;
    } else {
        echo $num . ' – четное число.' . '<br/>';
        $num++;
    }
} while ($num < 11);

echo '<br/>';

?>


// 3.3

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



// 3.4


<?php

function translit($str)
{
    if (!is_string($str)) {
        return 'incorrect argument';
    }

    $ruChars = 'А	Б	В	Г	Д	Е	Ё	Ж	З	И	Й	К	Л	М	Н	О	П	Р	С	Т	У	Ф	Х	Ц	Ч	Ш	Щ	Ъ	Ы	Ь	Э	Ю	Я';
    $enChars = 'A	B	V	G	D	E	E	ZH	Z	I	Y	K	L	M	N	O	P	R	S	T	U	F	KH	TS	CH	SH	SCH	’ 	Y	’ 	E	YU	YA';

    
    $tranArr = array_combine(explode('	', mb_strtolower($ruChars)), explode('	', strtolower($enChars)));
    
    $stringArr = preg_split('//u', mb_strtolower($str), 0, PREG_SPLIT_NO_EMPTY);

    $requestedArr = [];

    
    for ($i = 0; $i < count($stringArr); $i++) {
        foreach ($tranArr as $key => $value) {
            
            if ($stringArr[$i] == $key) {
                array_push($requestedArr, $value);
                break;
                
            } elseif (preg_match('/[[:punct:]]|\s/', $stringArr[$i])) {
                array_push($requestedArr, $stringArr[$i]);
                break;
            }
        }
    }

    
    return implode($requestedArr);
}

echo translit('Мороз и солнце; день чудесный! Еще ты дремлешь, друг прелестный — Пора, красавица, проснись: Открой сомкнуты негой взоры Навстречу северной Авроры, Звездою севера явись!');

echo '<hr>';


?>



// 3.5


<?php

function replSpace($str)
{
    if (!is_string($str)) {
        return "incorrect argument {$str}";
    }

    return preg_replace('/\s/', '_', $str);
}

echo replSpace('В конце ноября, в оттепель, часов в девять утра, поезд Петербургско-Варшавской железной дороги на всех парах подходил к Петербургу. Было так сыро и туманно, что насилу рассвело; в десяти шагах, вправо и влево от дороги, трудно было разглядеть хоть что-нибудь из окон вагона. Из пассажиров были и возвращавшиеся из-за границы; но более были наполнены отделения для третьего класса, и всё людом мелким и деловым, не из очень далека. Все, как водится, устали, у всех отяжелели за ночь глаза, все назяблись, все лица были бледно-желтые, под цвет тумана.');

echo '<hr>';



?>



// 3.6


<?php

$menuArr = [
    'Класс 1',
    'Класс 2' => ['Подкласс 1', 'Подкласс 2', 'Подкласс 3'],
    'Класс 3' => ['Подкласс 4', 'Подкласс 5', 'Подкласс 6']
];

function menuRend($arr)
{

    if (!is_array($arr)) {
        return 'incorrect argument';
    }

    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {
        
        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menuRend($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo menuRend($menuArr);

echo '<hr>';



?>



// 3.7


<?php

for ($i = 0; $i < 10; print $i++ . '<br/>') {
};

echo '<hr>';



?>


// 3.8


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



// 3.9


<?php


function translitReplaceSpaces($string)
{
    if (!is_string($string)) {
        return 'incorrect argument';
    }

    $ruChars = 'А	Б	В	Г	Д	Е	Ё	Ж	З	И	Й	К	Л	М	Н	О	П	Р	С	Т	У	Ф	Х	Ц	Ч	Ш	Щ	Ъ	Ы	Ь	Э	Ю	Я';
    $enChars = 'A	B	V	G	D	E	E	ZH	Z	I	Y	K	L	M	N	O	P	R	S	T	U	F	KH	TS	CH	SH	SCH	’	Y	’	E	YU	YA';

    
    $tranArr = array_combine(explode('	', mb_strtolower($ruChars)), explode('	', strtolower($enChars)));
    
    $stringArr = preg_split('//u', mb_strtolower($string), 0, PREG_SPLIT_NO_EMPTY);

    
    for ($i = 0; $i < count($stringArr); $i++) {
        foreach ($tranArr as $key => $value) {
            
            if ($stringArr[$i] == $key) {
                $requestedArr[] = $value;
                break;
                
            } elseif (preg_match('/[[:punct:]]|\s/', $stringArr[$i])) {
                $requestedArr[] = $stringArr[$i];
                break;
            }
        }
    }

    
    return preg_replace('/\s/', '_', implode($requestedArr));
}

echo translitReplaceSpaces('Мне снился снег, какой бывает часто
В разгар зимы, на пике января –
Он маленькими радугами счастья
Жонглировал в прищуре фонаря.');

?>