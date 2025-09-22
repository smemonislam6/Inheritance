<?php

/**
 * Create a base class Vehicle with properties like brand and model, and a method getDetails().
 * Derive two classes Car and Motorcycle that inherit from Vehicle,
 * each adding a unique property and overriding getDetails() to include it.
 */

class Vehicle
{
    protected $brand;
    protected $model;

    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;

    }

    public function getDetails()
    {
        return $this->brand . ' ' . $this->model;
    }
}

class Car extends Vehicle
{
    protected $numberOfDoors;

    public function __construct(int $numberOfDoors, string $brand, string $model)
    {
        parent::__construct($brand, $model);
        $this->numberOfDoors = $numberOfDoors;
    }

    public function getDetails()
    {
        return 'Car: ' . parent::getDetails() . ', Doors: ' . $this->numberOfDoors;
    }

}

class Motorcycle extends Vehicle
{

    protected $hasSidecar;

    public function __construct(bool $hasSidecar, string $brand, string $model)
    {
        parent::__construct($brand, $model);
        $this->hasSidecar = $hasSidecar;
    }
    public function getDetails()
    {
        return 'Motorcycle: ' . parent::getDetails() . ', Sidecar: ' . ($this->hasSidecar ? 'Yes' : 'No');
    }
}

$car = new car(4, 'Toyota', 'Camry');
echo $car->getDetails() . PHP_EOL;

$motorcycle = new Motorcycle(false, 'Harley-Davidson', 'Street 750');
echo $motorcycle->getDetails() . PHP_EOL;
