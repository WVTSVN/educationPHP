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