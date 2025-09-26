<?php

class Vehicle
{
    public function getTotalFare()
    {
        return $this->getBaseFare() + $this->getPerKiloFare();
    }

    public function getBaseFare()
    {
        return 0;
    }

    public function getperKiloFare()
    {
        return 0;
    }
}

class Car extends Vehicle
{
    public function getBaseFare()
    {
        return 20;
    }

    public function getPerKiloFare()
    {
        return 10;
    }
}

class Bike extends Vehicle
{
    public function getBaseFare()
    {
        return 30;
    }

    public function getperKiloFare()
    {
        return 20;
    }
}

$car = new Car();
echo $car->getTotalFare() . PHP_EOL;

$bike = new Bike();
echo $bike->getTotalFare() . PHP_EOL;
