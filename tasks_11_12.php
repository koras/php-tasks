<?php
$arr = array(1, 2, 5, 9, 4, 13, 4, 10);
$arr_th = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $value){
    if ($value == 4){
        echo "Есть! <br>";
        break;
    }
}
foreach ($arr_th as $value){
    if ((intdiv($value, 100) == 0) && ($value/10%10 == 1 || $value/10%10 == 2 || $value/10%10 == 5)){
        echo $value, '<br>';
    }
    else if ((intdiv($value, 1000) == 0) && ($value/100%10 == 1 || $value/100%10 == 2 || $value/100%10 == 5)){
        echo $value, '<br>';
    }
    else if ((intdiv($value, 10000) == 0) && ($value/1000%10 == 1 || $value/1000%10 == 2 || $value/1000%10 == 5)){
        echo $value, '<br>';
    }
}
