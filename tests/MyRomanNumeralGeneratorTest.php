<?php

class MyRomanNumeralGeneratorTest extends PHPUnit_Framework_TestCase
{

    public function testIsIEqualToOne()
    {
        $numeral = MyRomanNumeralGenerator::Generate(1);

        $this->assertEquals($numeral, 'I');
    }
    
    public function testIsVEqualToFive()
    {
        $numeral = MyRomanNumeralGenerator::Generate(5);

        $this->assertEquals($numeral, 'V');
    }
    
    public function testIsXEqualToTen()
    {
        $numeral = MyRomanNumeralGenerator::Generate(10);

        $this->assertEquals($numeral, 'X');
    }
    
    public function testIsXXEqualToTwenty()
    {
        $numeral = MyRomanNumeralGenerator::Generate(20);

        $this->assertEquals($numeral, 'XX');
    }
    
    public function testMaxNumeral()
    {
        $numeral = MyRomanNumeralGenerator::Generate(3999);

        $this->assertEquals($numeral, 'MMMCMXCIX');
    }
    
    public function testZeroNumeral()
    {
        $numeral = MyRomanNumeralGenerator::Generate(0);

        $this->assertEquals($numeral, '');
    }
    
    public function testIVNumeral()
    {
        $numeral = MyRomanNumeralGenerator::Generate(4);

        $this->assertEquals($numeral, 'IV');
    }
    
    public function testIXNumeral()
    {
        $numeral = MyRomanNumeralGenerator::Generate(9);

        $this->assertEquals($numeral, 'IX');
    }
    
    public function testXLNumeral()
    {
        $numeral = MyRomanNumeralGenerator::Generate(40);

        $this->assertEquals($numeral, 'XL');
    }
    
    public function testXCNumeral()
    {
        $numeral = MyRomanNumeralGenerator::Generate(90);

        $this->assertEquals($numeral, 'XC');
    }
    
    public function testCDNumeral()
    {
        $numeral = MyRomanNumeralGenerator::Generate(400);

        $this->assertEquals($numeral, 'CD');
    }
    
    public function testCMNumeral()
    {
        $numeral = MyRomanNumeralGenerator::Generate(900);

        $this->assertEquals($numeral, 'CM');
    }
    
    /**
     * @expectedException RangeException
     */

    public function testExceptionOnNegativeNumbers()
    {
        MyRomanNumeralGenerator::Generate(-10);
    }
    
    /**
     * @expectedException RangeException
     */

    public function testExceptionOnMaxNumber()
    {
        MyRomanNumeralGenerator::Generate(4000);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */

    public function testExceptionOnNonIntegers()
    {
        MyRomanNumeralGenerator::Generate('Test');
    }
}
