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
