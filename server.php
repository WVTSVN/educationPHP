<?php
//print_r($_FILES);
if($_FILES['photo']['size'] > 100000000){
    die("Файл превышает допустимый размер!");
}
else{
    $path = "images/".$_FILES['photo']['name'];
    if(copy($_FILES['photo']['tmp_name'],$path)){
        echo "Файл ".$_FILES['photo']['name']." успешно загружен!";
    }
}