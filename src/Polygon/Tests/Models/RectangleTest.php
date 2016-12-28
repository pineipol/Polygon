<?php
declare(strict_types = 1);

use Polygon\Models\Rectangle;

/**
 * Class RectangleTest
 *
 * Testcase for Rectangle class
 */
class RectangleTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test that Perimeter Method Should Return Rectangle Perimeter
     */
    public function testPerimeterMethodShouldReturnRectanglePerimeter()
    {
        $Rectangle = new Rectangle(4, 2);

        $this->assertEquals(12.0, $Rectangle->perimeter());
    }

    /**
     *  Test that Area Method Should Return Rectangle Area
     */
    public function testAreaMethodShouldReturnRectangleArea()
    {
        $Rectangle = new Rectangle(4, 2);

        $this->assertEquals(8.0, $Rectangle->area());
    }
}