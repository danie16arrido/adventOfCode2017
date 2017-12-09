<?php
use PHPUnit\Framework\TestCase;

final class ChecksumTest extends TestCase
{
    public function testCanCreateClass() : void
    {
        $var = new \DayTwo\Checksum([1,2,3]);
        $this->assertEquals(
            true,
            $var instanceof \DayTwo\CheckSum
        );
        
    }
    
    public function testCanNotacceptStrings(){
        $var = "array";
        $this->assertEquals(
            false,
            $var instanceof \DayTwo\CheckSum
        );
    }
    
    public function testCanNotacceptEmptyArray(){
        $var = [];
        $this->assertEquals(
            false,
            $var instanceof \DayTwo\CheckSum
        );
    }

    public function testCanNotacceptEmptyTwoDArray()
    {
        $var = [[],[]];
        $this->assertEquals(
            false,
            $var instanceof \DayTwo\CheckSum
        );
    }
    
    public function testCanGetOneDChecksum(){
        $var = new \DayTwo\Checksum([1,2,3]);
        $this->assertEquals(
            2,
            $var->checkSum()
        );
    }

    public function testCanGetChecksumFromArraySizeOne()
    {
        $var = new \DayTwo\Checksum([1]);
        $this->assertEquals(
            1,
            $var->checkSum()
        );
    }

    public function testCanGetChecksumFromArraySizeTwo()
    {
        $var = new \DayTwo\Checksum([4,2]);
        $this->assertEquals(
            2,
            $var->checkSum()
        );
    }

    // public function testCanDetect1DArray(){
    //     $var = new \DayTwo\Checksum([4, 2]);
    //     $this->assertEquals(
    //         false,
    //         $var->isArrayTwoD()
    //     );
    // }

    // public function testCanDetect2DArray()
    // {
    //     $var = new \DayTwo\Checksum([[4, 2],[5,6]]);
    //     $this->assertEquals(
    //         true,
    //         $var->isArrayTwoD()
    //     );
    // }

    public function testCanCalculateTwoDArrayCheckSum(){
        $var = new \DayTwo\Checksum([[4, 1], [6,8]]);
        $this->assertEquals(
            5,
            $var->checkSum()
        );
    }

    public function testCanCalculateTwoDArrayCheckSumA()
    {
        $var = new \DayTwo\Checksum([[4, 1],[6, 8],[3,4,5,1,2,4,5,8,9,10]]);
        $this->assertEquals(
            14,
            $var->checkSum()
        );
    }
    public function testCanCalculateTwoDArrayCheckSumB()
    {
        $var = new \DayTwo\Checksum([[4], [6, 8], [3, 4, 5, 1, 2, 4, 5, 8, 9, 10]]);
        $this->assertEquals(
            15,
            $var->checkSum()
        );
    }
}

