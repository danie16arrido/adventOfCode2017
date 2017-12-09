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
}

