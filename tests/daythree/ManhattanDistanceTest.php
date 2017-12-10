<?php
use PHPUnit\Framework\TestCase;

final class ManhattanDistance extends TestCase
{
    public function testCanSetNumber() : void
    {
        $num = 78;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            78,
            $manhattan->getNumber()
        );
    }

    public function testGetStepsClosestToUpperFrame() : void
    {
        $num = 78;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            5,
            $manhattan->getShortestPath()
        );
    }

    public function testGetStepsOnEighth() : void
    {
        $num = 96;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            5,
            $manhattan->getShortestPath()
        );
    }

    public function testGetStepsOnQuarter() : void
    {
        $num = 111;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            10,
            $manhattan->getShortestPath()
        );
    }

    public function testGetStepsAbovefirstEight() : void
    {
        $num = 87;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            6,
            $manhattan->getShortestPath()
        );
    }

    public function testGetStepsAbovefirstQuarter() : void
    {
        $num = 97;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            6,
            $manhattan->getShortestPath()
        );
    }

    public function testGetStepsBelowfirstQuarter() : void
    {
        $num = 62;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            5,
            $manhattan->getShortestPath()
        );
    }

    public function testGetStepsBelowfirstQuartea() : void
    {
        $num = 91;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            10,
            $manhattan->getShortestPath()
        );
    }
    public function testGetStepsBelowfirstQuarteB() : void
    {
        $num = 9;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            2,
            $manhattan->getShortestPath()
        );
    }

    public function testGetStepsBelowfirstQuarteC() : void
    {
        $num = 85;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            6,
            $manhattan->getShortestPath()
        );
    }

    public function testGetStepsBelowfirstQuarteD() : void
    {
        $num = 77;
        $manhattan = new \DayThree\ManhattanDistance($num);
        $this->assertEquals(
            4,
            $manhattan->getShortestPath()
        );
    }

}
