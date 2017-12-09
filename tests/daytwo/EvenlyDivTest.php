<?php
use PHPUnit\Framework\TestCase;

final class EvenlyDiv extends TestCase
{
    public function testCanCalculateForOneD() : void
    {
        $arr = [5, 9, 2, 8];
        $evenly = new \DayTwo\EvenlyDiv($arr);


        $this->assertEquals(
            4,
            $evenly->evenlyDiv()
        );
    }

    public function testCanCalculateForTwoD() : void
    {
        $arr = [[5, 9, 2, 8], [5, 9, 2, 8]];
        $evenly = new \DayTwo\EvenlyDiv($arr);


        $this->assertEquals(
            8,
            $evenly->evenlyDiv()
        );
    }
}