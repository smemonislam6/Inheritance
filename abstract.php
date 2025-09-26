<?php

abstract class Shape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function describe()
    {
        return "This is a " . $this->name . " with area: " . $this->calculateArea();
    }

    abstract protected function calculateArea();
}

class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    protected function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width  = $width;
        $this->height = $height;
    }

    protected function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle("Circle", 5);
echo $circle->describe() . "\n";

$rectangle = new Rectangle("Rectangle", 4, 6);
echo $rectangle->describe() . "\n";
