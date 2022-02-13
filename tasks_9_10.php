<?php
$arr = array(2, 5, 9, 15, 0, 4);
$array_th = array(0, -5, 6, -7, 9, 8, -6);
foreach ($arr as $value){
    if ($value > 3 && $value < 10){
        echo $value, '<br>';
    }
}
foreach ($array_th as $value){
    if ($value > 0)
        $summ += $value;
}
echo $summ;