<?php
declare(strict_types = 1);

use Polygon\Models\Square;

/**
 * Class SquareTest
 *
 * Testcase for Square class
 */
class SquareTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test that Perimeter Method Should Return Square Perimeter
     */
    public function testPerimeterMethodShouldReturnSquarePerimeter()
    {
        $square = new Square(2);

        $this->assertEquals(8.0, $square->perimeter());
    }

    /**
     *
     */
    public function testAreaMethodShouldReturnSquareArea()
    {
        $square = new Square(2);

        $this->assertEquals(4.0, $square->area());
    }
}