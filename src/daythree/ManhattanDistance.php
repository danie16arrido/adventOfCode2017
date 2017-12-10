<?php
namespace DayThree;

class ManhattanDistance {
    private $number;
    private $steps;

    function __construct($num){
        $this->number = $num;
    }
    public function getNumber(){
        return $this->number;
    }

    public function getShortestPath(){
        $this->calculatePath();
        return $this->steps;    
    }

    private function calculatePath(){
        $limits = $this->getLimits();

        $diff = $limits["higherPoint"] - $this->number;

        if($diff >= $limits["middlePoint"]){
            $diff = $this->number - $limits["lowerPoint"];
        }
        if(($diff % $limits["modMax"]) == 0 ){
            $this->steps = $limits["maxSteps"];
        }else if($diff <= $limits["eighth"]){
            $a = abs($diff - $limits["minSteps"]);
            $this->steps =  $a + $limits["minSteps"];
        }else{
            $this->steps = ($diff % $limits["modOther"]) + $limits["minSteps"];
        }
    }
    
    private function getLimits(){
        $frame = ceil(sqrt($this->number));
        //if number is even add one as each frame is made out of 2 consecutive squared numbers
        if($frame % 2 == 0){
            $frame += 1;
        }

        $data = [
            "lowerPoint" => ($frame - 2)**2, 
            "higherPoint" => $frame**2, 
            "middlePoint" => $frame + 1,
            "modMax" => $frame - 1,
            "modOther" => ($frame - 1)/2,
            "minSteps" => (int)($frame/2),
            "maxSteps" => $frame - 1,
            "eighth" => ($frame + 1)/3
        ];
        return $data;
    }

}