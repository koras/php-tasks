<?php
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
$array = array(
    "Коля" => "200",
    "Вася" => "300",
    "Петя" => "400"
);
foreach ($arr as $key => $value) {
    echo "$key - $value", '<br>';
}
foreach ($array as $key => $value) {
    echo "$key - зарплата $value долларов", '<br>';
}
//задание 3 и 3.1