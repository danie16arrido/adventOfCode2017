<?php
namespace DayTwo;

class EvenlyDiv{
    private $arr;
    private $twoD_flag;
    
    function __construct($arr){
        $this->arr = $arr; 
        $this->size = sizeof($arr);
        $this->twoD_flag = is_array($arr[0]);
    }

    private function calculateEvenlyDiv($arr){
        //Sort array high to low.
        rsort($arr);
        $size = sizeof($arr);
        for ($i = 0; $i < $size - 1; $i++) {
            for ($j = 0; $j < $size; $j++) {
                if ($i == $j || $i - $j == 1) {
                } else {
                    if ($arr[$i] % $arr[$j] == 0) {
                        return ($arr[$i] / $arr[$j]);
                    }else{}
                }
            }
        }
        return null;
    }

    public function evenlyDiv(){
        if($this->isArrayTwoD()){
            return $this->twoDEvenlyDiv($this->arr);
        }else{
            return $this->calculateEvenlyDiv($this->arr);
        }
    }

    private function isArrayTwoD()
    {
        return $this->twoD_flag;
    }

    private function twoDEvenlyDiv($arr)
    {
        $size = sizeof($arr);
        $total = 0;
        for ($i = 0; $i < $size; $i++) {
            $total += $this->calculateEvenlyDiv($arr[$i]);
        }
        return $total;
    }
}