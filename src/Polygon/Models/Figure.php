<?php
declare(strict_types = 1);

namespace Polygon\Models;

/**
 * Class Figure
 *
 * Defines common contract for all Polygon figures
 *
 * @package Polygon\Models
 */
abstract class Figure
{
    /**
     * Calculates a figure area
     *
     * @return float
     */
    abstract public function area(): float;

    /**
     * Calculates a figure perimeter
     *
     * @return float
     */
    abstract public function perimeter(): float;
}