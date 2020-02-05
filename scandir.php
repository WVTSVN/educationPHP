<?php

$mas = scandir("images");

for($i=0; $i<count($mas); $i++) {
    
        if ($i > 1) {
        echo "<a href='images/$mas[$i]' target='_blank'> <img src='images/$mas[$i]' width='200'> </a>";
    
        };
};
