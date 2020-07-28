<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 8, $sut->add( 5,3 ) );
        $this->assertEquals( 5, $sut->add( 5,0 ) );

    }

    public function testAddWillReturnTheSubstractOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 2, $sut->substract( 5,3 ) );

    }

    public function testAddWillReturnTheMultiplyOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 12, $sut->multiply( 6,2 ) );

    }

    public function testAddWillReturnTheDivideOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 3, $sut->divide( 6,2 ) );

    }
}