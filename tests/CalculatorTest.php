<?php

require __DIR__ . "/../src/Calculator.php";

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {
        $firstOperad = 1;
        $secondOperad = 1;
        $operator = ADDITION;
        $expected = 2;
        $calculator = new Calculator();
        $result = $calculator->calculate($firstOperad, $secondOperad, $operator);
        $this->assertEquals($expected, $result);
    }
}