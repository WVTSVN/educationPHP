<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN>
<html>
 <head>
 <?php
    $title = "<title>Урок 1</title>";
    $h1 = "<h1>Заголовок</h1>";
 $date = date('l jS \of F Y h:i:s A');
 ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php
    echo $title;
    ?>
 </head>
 <body>
    <?php
    echo $h1;
    ?>
  
  <!-- Комментарий -->
  <p>Первый абзац.</p>
  <p>Второй абзац.</p>
   <?php
    echo $date;
    ?>
 </body>
</html>
