<?php
function showform() {
    echo $_GET["login"],'<br>', $_GET["password"];
}
$func = 'showform';
$func(); 