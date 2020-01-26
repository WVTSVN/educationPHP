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
