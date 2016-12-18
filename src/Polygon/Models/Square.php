<?php
declare(strict_types = 1);

namespace Polygon\Models;

/**
 * Class Square
 *
 * Model that represents an Square
 *
 * @package Polygon\Models
 */
class Square extends Figure
{
    /** @var float $side Side length */
    private $side = 0;

    /**
     * Square constructor.
     *
     * @param float $side
     */
    public function __construct(float $side)
    {
        $this->setSide($side);
    }

    /**
     * Calculates Square perimeter
     *
     * @return float
     */
    public function perimeter(): float
    {
        return $this->getSide() * 4;
    }

    /**
     * Calculates Square Area
     *
     * @return float
     */
    public function area(): float
    {
        return (float)pow($this->getSide(), 2);
    }

    /**
     * Side setter
     *
     * @param float $side
     *
     * @return Square
     */
    public function setSide(float $side): Square
    {
        $this->side = $side;

        return $this;
    }

    /**
     * Side getter
     *
     * @return float
     */
    public function getSide(): float
    {
        return $this->side;
    }
}
