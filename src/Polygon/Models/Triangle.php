<?php
declare(strict_types = 1);

namespace Polygon\Models;

/**
 * Class Triangle
 *
 * Model that represents an Triangle
 *
 * @package Polygon\Models
 */
class Triangle extends Figure
{
    /** @var float $base */
    private $base = 0;

    /** @var int $height*/
    private $height = 0;

    /** @var float $side2  */
    private $side2 = 0;

    /** @var float $side3 */
    private $side3 = 0;

    /**
     * Triangle constructor.
     * @param $base
     * @param $height
     * @param $side2
     * @param $side3
     */
    public function __construct($base, $height, $side2, $side3)
    {
        $this->base = $base;
        $this->height = $height;
        $this->side3 = $side3;
        $this->side2 = $side2;
    }

    /**
     * Calculates Triangle perimeter
     *
     * @return float
     */
    public function perimeter(): float
    {
        return $this->getBase() + $this->getSide2() + $this->getSide3();
    }

    /**
     * Calculates Triangle area
     *
     * @return float
     */
    public function area(): float
    {
        return $this->getBase() * $this->getHeight() / 2;
    }

    /**
     * @param float $base
     * @return Triangle
     */
    public function setBase($base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase()
    {
        return $this->base;
    }
    /**
     * @param float $height
     * @return Triangle
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param float $side2
     * @return Triangle
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
        return $this;
    }

    /**
     * @return float
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @param float $side3
     * @return Triangle
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
        return $this;
    }

    /**
     * @return float
     */
    public function getSide3()
    {
        return $this->side3;
    }

}