<?php
namespace DayTwo;

class MinMax
{
    public $min;
    public $max;
    public function getCheckSum()
    {
        return ($this->max - $this->min);
    }
}

class Checksum{
    private $minmax;
    private $arr;
    private $twoD_flag;

    function __construct($arr){
        $this->minmax = new MinMax();
        $this->arr = $arr;
        $this->twoD_flag = is_array($arr[0]);
    }

    private function getMinMax($arr)
    {
        $this->minmax = new MinMax();
        $i = 0;
        $size = sizeof($arr);   
    /* If array has even number of elements then 
    initialize the first two elements as minimum and 
    maximum */
        if ($size % 2 == 0) {
            if ($arr[0] > $arr[1]) {
                $this->minmax->max = $arr[0];
                $this->minmax->min = $arr[1];
            } else {
                $this->minmax->min = $arr[0];
                $this->minmax->max = $arr[1];
            }
            $i = 2;  /* set the startung index for loop */
        }  
 
    /* If array has odd number of elements then 
    initialize the first element as minimum and 
    maximum */
        else {
            $this->minmax->min = $arr[0];
            $this->minmax->max = $arr[0];
            $i = 1;  /* set the startung index for loop */
        }
   
    /* In the while loop, pick elements in pair and 
    compare the pair with max and min so far */
        while ($i < $size - 1) {
            if ($arr[$i] > $arr[$i + 1]) {
                if ($arr[$i] > $this->minmax->max)
                    $this->minmax->max = $arr[$i];
                if ($arr[$i + 1] < $this->minmax->min)
                    $this->minmax->min = $arr[$i + 1];
            } else {
                if ($arr[$i + 1] > $this->minmax->max)
                    $this->minmax->max = $arr[$i + 1];
                if ($arr[$i] < $this->minmax->min)
                    $this->minmax->min = $arr[$i];
            }
            $i += 2; /* Increment the index by 2 as two 
               elements are processed in loop */
        }
    }

    public function checkSum(){
        if($this->twoD_flag){
            return $this->twoDCheckSum($this->arr);
        }else{
            return $this->callCheckSum($this->arr);
        }    
    }
    public function callCheckSum($arr){
        $size = sizeof($arr);
        switch ($size) {
            case 1:
                return $arr[0];
                break;
            
            default:
                return $this->checksumArraySizeGreaterThanTwo($arr);
                break;
        }    
    }
    
    private function checksumArraySizeGreaterThanTwo($arr){
        $this->getMinMax($arr);
        return $this->minmax->getChecksum($arr);
    }

    private function isArrayTwoD(){
        return $this->twoD_flag;
    }

    private function twoDCheckSum($arr){
        $size = sizeof($arr);
        $total = 0;
        for ($i = 0; $i < $size ; $i++) {
            $total += $this->callCheckSum($arr[$i]);
        }
        return $total;
    }
}