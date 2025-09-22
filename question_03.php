<?php
/**
 * Build a class Shape with a method calculateArea().
 * Create two subclasses Circle and Rectangle
 * that inherit from Shape and implement calculateArea() based on their specific formulas
 */

abstract class Shape
{
    abstract public function calculateArea(): float;
}

class Circle extends Shape
{
    protected $radius;
    public function __construct(float $radius)
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be positive");
        }

        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * ($this->radius * $this->radius);
    }
}

class Rectangle extends Shape
{
    protected $length;
    protected $width;

    public function __construct(float $length, float $width)
    {
        if ($length <= 0 || $width <= 0) {
            throw new InvalidArgumentException("Length and width must be positive");
        }

        $this->length = $length;
        $this->width  = $width;
    }

    public function calculateArea(): float
    {
        return $this->length * $this->width;
    }
}

$circle = new Circle(5);
echo 'Circle Area: ' . $circle->calculateArea() . PHP_EOL;

$rectangle = new Rectangle(4, 5);
echo 'Rectangle Area: ' . $rectangle->calculateArea() . PHP_EOL;
