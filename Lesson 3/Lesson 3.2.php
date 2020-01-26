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
