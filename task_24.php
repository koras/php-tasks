<?php
function showform() {
    $get = $_GET;
    if(count($get)>0){
        foreach($get as $value){
             echo "get $value  <br/>";
        }
    }
    echo '<br/>';
    $post = $_POST;
    if(count($post)>0){
        foreach($post as $value){
             echo "post = $value <br/>";
        }
    }
    
}
showform(); 
