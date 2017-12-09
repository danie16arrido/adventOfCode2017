<?php

$a = [3,1,4,2,2];
$size = sizeof($a);
class MinMax{
    public $min;
    public $max;
    public function getCheckSum(){
        return ($this->max - $this->min);
    }
}

function getMinMax($arr, $n) {
    $minmax = new MinMax();
    $i = 0;   
  /* If array has even number of elements then 
    initialize the first two elements as minimum and 
    maximum */
    if ($n % 2 == 0) {
        if ($arr[0] > $arr[1]) {
            $minmax->max = $arr[0];
            $minmax->min = $arr[1];
        } else {
            $minmax->min = $arr[0];
            $minmax->max = $arr[1];
        }
        $i = 2;  /* set the startung index for loop */
    }  
 
   /* If array has odd number of elements then 
    initialize the first element as minimum and 
    maximum */
    else {
        $minmax->min = $arr[0];
        $minmax->max = $arr[0];
        $i = 1;  /* set the startung index for loop */
    }
   
  /* In the while loop, pick elements in pair and 
     compare the pair with max and min so far */
    while ($i < $n - 1) {
        if ($arr[$i] > $arr[$i + 1]) {
            if ($arr[$i] > $minmax->max)
                $minmax->max = $arr[$i];
            if ($arr[$i + 1] < $minmax->min)
                $minmax->min = $arr[$i + 1];
        } else {
            if ($arr[$i + 1] > $minmax->max)
                $minmax->max = $arr[$i + 1];
            if ($arr[$i] < $minmax->min)
                $minmax->min = $arr[$i];
        }
        $i += 2; /* Increment the index by 2 as two 
               elements are processed in loop */
    }
return $minmax;
}

$result = getMinMax($a, $size );
print_r($result->getChecksum());