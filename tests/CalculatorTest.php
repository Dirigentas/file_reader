<?php

use PHPUnit\Framework\TestCase;

require_once './app/calculator.php'; // Include the file with the class we want to test

class CalculatorTest extends TestCase {
    public function testAddNumbers() {
        $calculator = new Calculator();

        // Test case 1: Check if the function returns the correct result for 2 + 3
        $result1 = $calculator->addNumbers(2, 3);
        $this->assertEquals(5, $result1);

        // Test case 2: Check if the function returns the correct result for -2 + 5
        $result2 = $calculator->addNumbers(-2, 5);
        $this->assertEquals(3, $result2);

        // Test case 3: Check if the function returns the correct result for 0 + 0
        $result3 = $calculator->addNumbers(0, 0);
        $this->assertEquals(0, $result3);
    }
}
?>