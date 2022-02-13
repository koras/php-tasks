<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$week = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
$day = 'Воскресенье';
foreach ($arr as $value) {
    echo '-', $value;
}
echo "-<br>";
foreach ($week as $value) {
    if ($value == 'Суббота' || $value == 'Воскресенье'){
        echo "<b> $value </b>";
    }
    else {
        echo "$value ";
    }
}
echo '<br>';
foreach ($week as $value) {
    if ($value == $day){
        echo "<i> $value </i>";
    }
    else {
        echo "$value ";
    }
}