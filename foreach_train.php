<?php
$arr = array(1, 2, 3, 4, 5);
$arr_lang = array('html', 'css', 'php', 'js', 'jq');
foreach ($arr as $value) {
    $result += $value**2;
}
echo $result;
foreach ($arr_lang as $value) {
    echo '<br>', $value;
}
//задания 1,2