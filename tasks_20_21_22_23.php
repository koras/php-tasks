<?php
$arr = range(1, 100);
function cube($num){
    return $num**3;
}
echo cube(10), '<br>';
echo $_GET["arr1"] + $_GET["arr2"], '<br>';
foreach ($_GET as $var => $val){
    echo $var." = ".$val."<br>";
}