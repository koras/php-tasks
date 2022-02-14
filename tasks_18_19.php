<?php
$num=1000;
$k = 0;
$newstr = 'html, <b>php</b>, js';
while ($num >= 50) {
    $num /= 2;
    $k++;
}
echo "$num $k <br>";

for ($i = 0; $i < strlen($newstr); $i++){
    if ($newstr{$i} != '<' && $newstr{$i} != '>') {
        $rez{$i} = $newstr{$i};
    }
    echo $rez{$i};
}
