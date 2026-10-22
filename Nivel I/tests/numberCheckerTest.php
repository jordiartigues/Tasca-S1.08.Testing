<?php

require_once "NumberChecker.php";

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
}
