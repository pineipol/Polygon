<?php
declare(strict_types = 1);

use Polygon\Models\Triangle;

/**
 * Class TriangleTest
 *
 * Testcase for Striangule class
 */
class TriangleTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test that Perimeter Method Should Return Triangle Perimeter
     */
    public function testPerimeterMethodShouldReturnTrianglePerimeter()
    {
        $triangle = new Triangle(10, 20, 25, 25);

        $this->assertEquals(60, $triangle->perimeter());
    }

    /**
     * Test that Area Method Should Return Triangle Area
     */
    public function testAreaMethodShouldReturnTriangleArea()
    {
        $triangle = new Triangle(10, 20, 25, 25);

        $this->assertEquals(100, $triangle->area());
    }

}