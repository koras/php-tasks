<?php
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$en = [];
$j = 0;
for ($i = 0; $i < 100; $i++) {
    $thislo[$i] = $i + 1;
}
foreach ($arr as $key => $value) {
    $en[$j] = $key;
    $ru[$j] = $value;
    $j++;
}