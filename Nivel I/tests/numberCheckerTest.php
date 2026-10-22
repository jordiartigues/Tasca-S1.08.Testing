<?php

require_once __DIR__ . "/../src/numberChecker.php";

use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase
{
    public function testIsEven(): void
    {
        $number1 = new NumberChecker(4);
        $this->assertTrue($number1->isEven());

        $number2 = new NumberChecker(3);
        $this->assertFalse($number2->isEven());

        $number3 = new NumberChecker(-2);
        $this->assertTrue($number3->isEven());

        $number4 = new NumberChecker(-3);
        $this->assertFalse($number4->isEven());

        $number5 = new NumberChecker(0);
        $this->assertTrue($number5->isEven());
    }

    public function testIsPositive(): void
    {
        $number1 = new NumberChecker(4);
        $this->assertTrue($number1->isPositive());

        $number2 = new NumberChecker(3);
        $this->assertTrue($number2->isPositive());

        $number3 = new NumberChecker(-2);
        $this->assertFalse($number3->isPositive());

        $number4 = new NumberChecker(-3);
        $this->assertFalse($number4->isPositive());

        $number5 = new NumberChecker(0);
        $this->assertFalse($number5->isPositive());
    }
}
