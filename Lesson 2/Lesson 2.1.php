<?php

    $a = rand(-50, 50);
    $b = rand(-50, 50);
    
    echo "a = " . $a;
    echo "<br />";
    echo "b = " . $b;
    echo "<br />";
    
    $c = $a - $b;
    $d = $a * $b;
    $e = $a + $b;
           
    if ($a > 0 && $b > 0) {
        echo "Разница " . $c;
    } else if ($a < 0 && $b < 0) {
        echo "Произведение " . $d;
    } else if ($a > 0 && $b < 0) {
        echo "Сумма " . $e;
    } else if ($a < 0 && $b > 0) {
        echo "Сумма " . $e;
    };
?>
