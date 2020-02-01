// 2.1

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


// 2.2 

<?php

    $a = rand(0, 15);
    
    echo "a = " . $a;
    echo "<br />";
    
    switch ($a) {
    case 0:
        echo "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
        break;
    case 1:
        echo "2,3,4,5,6,7,8,9,10,11,12,13,14,15";
        break;
    case 2:
        echo "3,4,5,6,7,8,9,10,11,12,13,14,15";
        break;
    case 3:
        echo "4,5,6,7,8,9,10,11,12,13,14,15";
        break;
    case 4:
        echo "5,6,7,8,9,10,11,12,13,14,15";
        break;
    case 5:
        echo "6,7,8,9,10,11,12,13,14,15";
        break;
    case 6:
        echo "7,8,9,10,11,12,13,14,15";
        break;
    case 7:
        echo "8,9,10,11,12,13,14,15";
        break;
    case 8:
        echo "9,10,11,12,13,14,15";
        break;
    case 9:
        echo "10,11,12,13,14,15";
        break;
    case 10:
        echo "11,12,13,14,15";
        break;
    case 11:
        echo "12,13,14,15";
        break;
    case 12:
        echo "13,14,15";
        break;
    case 13:
        echo "14,15";
        break;
    case 14:
        echo "15";
        break;
    case 15:
        echo "Нечего выводить!";
        break;
};
?>

// 2.3

<?php   
   
   function numSum($a, $b) {
       return $a + $b;
        echo "<br />";
        };
   
   echo numSum(11, 10);
   echo "<br />";
   
   function numDiff($a, $b) {
       return $a - $b;
       };
   
   echo numDiff(15, 10);
   echo "<br />";
   
   function numDiv($a, $b) {
       return $a / $b;
       };
   
   echo numDiv(15, 5);
   echo "<br />";
  
  function numMulti($a, $b) {
       return $a * $b;
       };
   
   echo numMulti(15, 10);
   echo "<br />";
  
  
 
?>


// 2.4 

<?php   
  
   
    function mathOperation ($arg1, $arg2, $operation) {
       if ($operation == "Сумма") {
           return numSum($arg1, $arg2);
           
        } else if ($operation == "Разность") {
           return numDiff($arg1, $arg2);
           
        } else if ($operation == "Деление") {
           return numDiv($arg1, $arg2);
           
        } else if ($operation == "Умножение") {
           return numMulti($arg1, $arg2);
        }
    };
   
   echo mathOperation (5, 2, "Разность");
    
    
    function mathOperations ($arg1, $arg2, $operation) {
        
        $switch ($operation) {
        
        case "Сумма":
           return numSum($arg1, $arg2);
           break;
           
        case "Разность":
           return numDiff($arg1, $arg2);
           break;
           
        case "Деление":
           return numDiv($arg1, $arg2);
           break;
           
        case "Умножение":
           return numMulti($arg1, $arg2);
           break;
        }
   };
    
    echo mathOperations (5, 2, "Сумма");
   
    
    
    
    
    
         
   function numSum($a, $b) {
       return $a + $b;
        };
   
   function numDiff($a, $b) {
       return $a - $b;
       };
   
   function numDiv($a, $b) {
       return $a / $b;
       };
   
  function numMulti($a, $b) {
       return $a * $b;
       };
   
?>


// 2.5


<?php 
    $title = "minimalistica";
    $h1 = "minimalistica"; 
    $year = date('Y');
    ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title><?=$title?></title> 
</head>
<body>

	<div id="content">
		<h1><?=$h1?></h1>
		
		<ul id="menu">
			<li><a href="#">home</a></li>
			<li><a href="#">archive</a></li>
			<li><a href="#">contact</a></li>
		</ul>
	
		<div class="post">
			<div class="details">
				<h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
				<p class="info">posted 3 hours ago in <a href="#">general</a></p>
			
			</div>
			<div class="body">
				<p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<h3><a href="#">Ut enim risus rhoncus</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col">
			<h3><a href="#">Maecenas iaculis leo</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col last">
			<h3><a href="#">Quisque consectetur odio</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		
		<div id="footer">
			<p>Copyright &copy; <?=$year; ?> ><em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
</body>
</html>


// 2.6


<?php 
   
   function power($val, $pow) {
       
        if ($pow == 1) {
        return $val;
        
  } else {
    return $val * power($val, $pow - 1);
  }
  };
  echo power(2, 5);
?>


// 2.7


<?php

$timeHour = date("G");

$timeMinutes = date("i");



	function myTime ($timeHour, $timeMinutes) {
		
		function myHour ($timeHour) {
		if ($timeHour == 1 || $timeHour == 21) {
			echo "$timeHour час ";
		} else if ($timeHour >= 5 && $timeHour <= 20) {
			echo "$timeHour часов ";
		} else {
			echo "$timeHour часа ";
		}
		};
		
		function myMinutes ($timeMinutes) {
			if ($timeMinutes == 1 || $timeMinutes == 21 || $timeMinutes == 31 || $timeMinutes == 41 || $timeMinutes == 51) {
			echo "$timeMinutes минута";
		} else if (($timeMinutes >= 2 && $timeMinutes <= 4) || ($timeMinutes >= 22 && $timeMinutes <= 24) || ($timeMinutes >= 32 && $timeMinutes <= 34)
			|| ($timeMinutes >= 42 && $timeMinutes <= 44) || ($timeMinutes >= 52 && $timeMinutes <= 54)){
			echo "$timeMinutes минуты";
		} else {
			echo "$timeMinutes минут";
		}
		};
	};

echo myTime ($timeHour, $timeMinutes);
echo myHour ($timeHour);
echo myMinutes ($timeMinutes); 

?>