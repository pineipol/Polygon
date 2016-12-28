<?php
declare(strict_types = 1);

namespace Polygon\Models;

/**
 * Class FigureManySides (regular)
 *
 *  Model that represents an FigureManySides
 *
 * @package Polygon\Models
 */
class FigureManySides extends Figure
{
    /**
     * @var int $numberSides
     */
    private $numberSides = 0;

    /**
     * @var float $side
     */
    private $side = 0;

    /**
     * @var float $apothem
     */
    private $apothem = 0;

    /**
     * FigureManySides constructor.
     * @param $numberSides
     * @param $side
     * @param $apothem
     */
    public function __construct($numberSides, $side, $apothem)
    {
        $this->$numberSides = $numberSides;
        $this->side = $side;
        $this->apothem =$apothem;
    }

    /**
     * Calculates FigureManySides perimeter
     *
     * Return Float
     */
    public function perimeter(): float
    {
        return $this->getSide() * $this->getNumberSides();
    }

    /**
     * Calculates FigureManySides area
     *
     * @return float
     */
    public function area(): float
    {
        return $this->perimeter() * $this->getApothem() / 2;
    }

    /**
     * @param int $numberSides
     * @return FigureManySides
     */
    public function setNumberSides($numberSides)
    {
        $this->numberSides = $numberSides;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberSides()
    {
        return $this->numberSides;
    }

    /**
     * @param float $side
     * @return FigureManySides
     */
    public function setSide($side)
    {
        $this->side = $side;
        return $this;
    }

    /**
     * @return float
     */
    public function getSide()
    {
        return $this->side;
    }

    /**
     * @param float $apothem
     * @return FigureManySides
     */
    public function setApothem($apothem)
    {
        $this->apothem = $apothem;
        return $this;
    }

    /**
     * @return float
     */
    public function getApothem()
    {
        return $this->apothem;
    }

}