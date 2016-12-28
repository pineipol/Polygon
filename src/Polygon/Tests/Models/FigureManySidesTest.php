<?php
declare(strict_types = 1);

use Polygon\Models\FigureManySides;

/**
 * Class SFigureManySidesTest
 *
 * Testcase for SFigureManySides class
 */
class FigureManySidesTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test that Perimeter Method Should Return SFigureManySides Perimeter
     */
    public function testPerimeterMethodShouldReturnFigureManySidesPerimeter()
    {
        $figureManySides = new FigureManySides(6, 10, 7);

        $this->assertEquals(60, $figureManySides->perimeter());
    }

    /**
     * Test that Area Method Should Return SFigureManySides Area
     */
    public function testAreaMethodShouldReturnFigureManySidesArea()
    {
        $figureManySides = new FigureManySides(6, 10, 7);

        $this->assertEquals(210, $figureManySides->area());
    }
}