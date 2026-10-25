<?php

require_once __DIR__ . "/../src/numberChecker.php";

use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase
{
    public function testIsEvenReturnsTrueForPositiveEvenNumber(): void
    {
        $number = new NumberChecker(4);

        $this->assertTrue($number->isEven());
    }

    public function testIsEvenReturnsFalseForPositiveOddNumber(): void
    {
        $number = new NumberChecker(3);

        $this->assertFalse($number->isEven());
    }

    public function testIsEvenReturnsTrueForNegativeEvenNumber(): void
    {
        $number = new NumberChecker(-2);

        $this->assertTrue($number->isEven());
    }

    public function testIsEvenReturnsFalseForNegativeOddNumber(): void
    {
        $number = new NumberChecker(-3);

        $this->assertFalse($number->isEven());
    }

    public function testIsEvenReturnsTrueForZero(): void
    {
        $number = new NumberChecker(0);

        $this->assertTrue($number->isEven());
    }

    public function testIsPositiveReturnsTrueForPositiveNumber(): void
    {
        $number = new NumberChecker(4);

        $this->assertTrue($number->isPositive());
    }

    public function testIsPositiveReturnsFalseForNegativeNumber(): void
    {
        $number = new NumberChecker(-2);

        $this->assertFalse($number->isPositive());
    }

    public function testIsPositiveReturnsFalseForZero(): void
    {
        $number = new NumberChecker(0);

        $this->assertFalse($number->isPositive());
    }

    public function testIsEvenReturnsFalseForPHPIntMax(): void
    {
        $number = new NumberChecker(PHP_INT_MAX);

        $this->assertFalse($number->isEven());
    }

    public function testIsEvenReturnsTrueForPHPIntMin(): void
    {
        $number = new NumberChecker(PHP_INT_MIN);

        $this->assertTrue($number->isEven());
    }

    public function testIsPositiveReturnsTrueForPHPIntMax(): void
    {
        $number = new NumberChecker(PHP_INT_MAX);

        $this->assertTrue($number->isPositive());
    }

    public function testIsPositiveReturnsFalseForPHPIntMin(): void
    {
        $number = new NumberChecker(PHP_INT_MIN);

        $this->assertFalse($number->isPositive());
    }
}
