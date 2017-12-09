<?php
namespace DayTwo;

use DayTwo\MinMax;

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
    private $size;

    function __construct($arr){
        $this->minmax = new MinMax();
        $this->arr = $arr;
        $this->size = sizeof($this->arr);
    }

    private function getMinMax()
    {
        $this->minmax = new MinMax();
        $i = 0;   
    /* If array has even number of elements then 
    initialize the first two elements as minimum and 
    maximum */
        if ($this->size % 2 == 0) {
            if ($this->arr[0] > $this->arr[1]) {
                $this->minmax->max = $this->arr[0];
                $this->minmax->min = $this->arr[1];
            } else {
                $this->minmax->min = $this->arr[0];
                $this->minmax->max = $this->arr[1];
            }
            $i = 2;  /* set the startung index for loop */
        }  
 
    /* If array has odd number of elements then 
    initialize the first element as minimum and 
    maximum */
        else {
            $this->minmax->min = $this->arr[0];
            $this->minmax->max = $this->arr[0];
            $i = 1;  /* set the startung index for loop */
        }
   
    /* In the while loop, pick elements in pair and 
    compare the pair with max and min so far */
        while ($i < $this->size - 1) {
            if ($this->arr[$i] > $this->arr[$i + 1]) {
                if ($this->arr[$i] > $this->minmax->max)
                    $this->minmax->max = $this->arr[$i];
                if ($this->arr[$i + 1] < $this->minmax->min)
                    $this->minmax->min = $this->arr[$i + 1];
            } else {
                if ($this->arr[$i + 1] > $this->minmax->max)
                    $this->minmax->max = $this->arr[$i + 1];
                if ($this->arr[$i] < $this->minmax->min)
                    $this->minmax->min = $this->arr[$i];
            }
            $i += 2; /* Increment the index by 2 as two 
               elements are processed in loop */
        }
    }

    public function checkSum(){
        switch ($this->size) {
            case 1:
                return $this->arr[0];
                break;
            
            default:
                return $this->checksumArraySizeGreaterThanTwo();
                break;
        }    
    }
    
    private function checksumArraySizeGreaterThanTwo(){
        $this->getMinMax();
        return $this->minmax->getChecksum();
    }
}