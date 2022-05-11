<?php
function($N){
    $num="";
    $gap=0;
    while($N>1){
        $num .= (string)($N%2);
        $N/=2;
    }
    $num = trim($num, 0);
    $num =  explode("1",$num);
    for($i=0;$i<count($num);$i++){
        (strlen($num[$i])>$gap) ? $gap = strlen($num[$i]) : $gap = $gap;
    }
    return $gap;
}
?>