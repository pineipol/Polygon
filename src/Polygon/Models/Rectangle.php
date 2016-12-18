<?php
declare(strict_types = 1);

namespace Polygon\Models;

/**
 * Class Rectangle
 *
 * Model that represents an Rectangle
 *
 * @package Polygon\Models
 */
class Rectangle extends Figure
{
    /** @var float $base */
    private $base = 0;

    /** @var float $height */
    private $height = 0;

    /**
     * Rectangle constructor.
     *
     * @param float $base
     * @param float $height
     */
    public function __construct(float $base, float $height)
    {
        $this->setBase($base);
        $this->setHeight($height);
    }

    /**
     * Calculates Rectangle perimeter
     *
     * @return float
     */
    public function perimeter(): float
    {
        return $this->getBase() * 2 + $this->getHeight() * 2;
    }

    /**
     * Calculates Rectangle Area
     *
     * @return float
     */
    public function area(): float
    {
        return $this->getBase() * $this->getHeight();
    }

    /**
     * Base setter
     *
     * @param float $base
     *
     * @return Rectangle
     */
    public function setBase(float $base): Rectangle
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Base getter
     *
     * @return float
     */
    public function getBase(): float
    {
        return $this->base;
    }

    /**
     * Height setter
     *
     * @param float $height
     *
     * @return Rectangle
     */
    public function setHeight(float $height): Rectangle
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Height getter
     *
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }
}
