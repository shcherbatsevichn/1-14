<?php 
error_reporting(-1);
// Парными  простыми числами называются два простых числа,
// разность которых равна двум. Например, 3 и 5; 11 и 13. Найти 10  парных  простых чисел. 

$n2 = 0;
$n1 = 0;
for($i = 1; $i < 1000 ; $i++){
    if(isjustnumder($i)){
        $n2 = $n1;
        $n1 = $i; 
        $diff = $n1 - $n2;
        if($counter >= 10){
            break;
        }
        if($diff == 2){
            echo("{$n2} - {$n1}<br>");
            $counter++;
        }
       
    }
}

function isjustnumder($number){
    $counter = 0;
    for ($n = 1; $n <= $number; $n++){
        if ($number % $n == 0){
            $counter++;
        }
    }
    if($counter <= 2){
        return true;
    }else{
        return false;
    }
    
}