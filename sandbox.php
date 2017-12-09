<?php
$arr = [3,8,6,5];
$size = sizeof($arr);
rsort($arr);

// print_r($arr);
for($i=0; $i < $size -1  ; $i++){
    for ($j = 0; $j < $size; $j++) {
        if($i == $j || $i-$j == 1){
        }else{
            if($arr[$i] % $arr[$j] == 0){
                $result =  ($arr[$i] / $arr[$j]);
                break;
            }
        }        
    }
}

echo $result;

